<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datatest;
use App\Dataset;

class DatatestController extends Controller
{
  public function index()
  {
    //ambil data(sesuai limit testing) dan skip data(sesuai limit Training) berupa string
    $all = Dataset::take($this->limitTesting())->skip($this->limitTraining())->get();
    $no = 0;

    $sukses = 0;
    $error = 0;

    for($i = 0; $i<$all->count(); $i++){
      if($all[$i]->keterangan == $all[$i]->datatest["prediksi"]){
        $sukses++;
      }else{
        $error++;
      }
    }

    $psukses = $sukses / $all->count() * 100;
    $perror = $error / $all->count() * 100;

    return view('datatest.index', compact('all', 'psukses', 'perror', 'no'));
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

  public function create()
  {

  }

  public function hitung()
  {
    $dataset = new Dataset();

    $all = Dataset::limit($this->limitTraining())->get();

    $total = $this->limitTraining();
    $lulus = $all->where('keterangan', 'Keterima')->count();
    $tidak = $all->where('keterangan', 'Tidak Keterima')->count();

    for($i = $this->limitTraining(); $i < $dataset->count(); $i++){
      $data = $dataset->where('id', $dataset->get()[$i]->id)->first();

      $gerakan = $data->gerakan;
      $vokal = $data->vokal;
      $sikap = $data->sikap;
      $konsen = $data->konsen;

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

      Datatest::create([
        'dataset_id' => $dataset->get()[$i]->id,
        'prediksi' => $prediksi
      ]);

    }
         return redirect()->back();
  }

  public function store(Request $request)
  {

  }

  public function show($id)
  {

  }

  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {

  }

  public function destroy($id)
  {

  }

}
