<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dataset;
use App\Seleksi;

class SeleksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = Seleksi::All();

      return view('seleksi.index', compact('data'));
    }

    public function run(Request $request)
    {
      //ambil data limit berupa string
      $all = Dataset::limit($this->limitTraining())->get();

      $total = $this->limitTraining();
      $lulus = $all->where('keterangan', 'Keterima')->count();
      $tidak = $all->where('keterangan', 'Tidak Keterima')->count();

      $nama = Request('nama');
      $gerakan = Request('gerakan');
      $vokal = Request('vokal');
      $sikap = Request('sikap');
      $konsen = Request('konsen');

      //Tidak
      $GT = $this->varPro('Tidak Keterima', 'gerakan', $gerakan);
      $VT = $this->varPro('Tidak Keterima', 'vokal', $vokal);
      $ST = $this->varPro('Tidak Keterima', 'sikap', $sikap);
      $KT = $this->varPro('Tidak Keterima', 'konsen', $konsen);

      //Keterima
      $GK = $this->varPro('Keterima', 'gerakan', $gerakan);
      $VK = $this->varPro('Keterima', 'vokal', $vokal);
      $SK = $this->varPro('Keterima', 'sikap', $sikap);
      $KK = $this->varPro('Keterima', 'konsen', $konsen);

      //values
      $TG = $all->where('gerakan', $gerakan)->count();
      $TV = $all->where('vokal', $vokal)->count();
      $TS = $all->where('sikap', $sikap)->count();
      $TK = $all->where('konsen', $konsen)->count();

      //Probabilitas
      $PKeterima = ($GK / $lulus) * ($VK / $lulus) * ($SK / $lulus) * ($KK / $lulus) * ($lulus / $total);
      $PTidak = ($GT / $tidak) * ($VT / $tidak) * ($ST / $tidak) * ($KT / $tidak) * ($tidak / $total);
      $PX = ($TG / $total) * ($TV / $total) * ($TS / $total) * ($TK / $total);

      //Total Probabilitas
      if ($PX == 0) {
        $TKeterima = 0;
        $TTidak = 0;
      }else{
        $TKeterima = $PKeterima / $PX;
        $TTidak = $PTidak / $PX;
      }

      //mecari nilai paling tinggi
      if ($TKeterima > $TTidak) {
        $prediksi = 'Keterima';
      }else{
        $prediksi = 'Tidak Keterima';
      }

      Seleksi::create([
        'nama' => $nama,
        'gerakan' => $gerakan,
        'vokal' => $vokal,
        'sikap' => $sikap,
        'konsen' => $konsen,
        'keterangan' => $prediksi
      ]);

      return view('seleksi.final', compact('total', 'lulus', 'tidak', 'gerakan',
                  'vokal', 'sikap', 'konsen', 'GT', 'VT', 'ST', 'KT', 'GK', 'VK',
                  'SK', 'KK', 'TG', 'TV', 'TS', 'TK', 'PX', 'PKeterima', 'PTidak',
                  'TKeterima', 'TTidak', 'prediksi'));
    }

    public function limitTraining()
    {
      $limit = Dataset::count() * 70/100;

      return $limit;
    }

    public function limitTesting()
    {
      $limit = Dataset::count() * 30/100;

      return $limit;
    }

    public function varPro($ket, $column, $syarat)
    {
      $all = Dataset::limit($this->limitTraining())->get();
      $result = $all->where('keterangan', $ket)->where($column, $syarat)->count();

      return $result;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
