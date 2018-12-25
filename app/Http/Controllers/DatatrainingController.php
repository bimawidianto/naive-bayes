<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dataset;

class DatatrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     $all = Dataset::take($this->limitTraining())->get();
     $result = $all->where('keterangan', $ket)->where($column, $syarat)->count();
     return $result;
    }

    public function varKet($ket)
    {
      $all = Dataset::take($this->limitTraining())->get();
      $keterangan = $all->where('keterangan', $ket)->count();
      return $keterangan;
    }

    public function index()
    {
      $all = Dataset::take($this->limitTraining())->get();

      $total = $this->limitTraining();
      $keterima = $this->varKet('Keterima');
      $tidak = $this->varKet('Tidak Keterima');

      //gerakan
      $gerakan = [
        "1/Keterima" => $this->varPro('Keterima', 'gerakan', 1),
        "2/Keterima" => $this->varPro('Keterima', 'gerakan', 2),
        "3/Keterima" => $this->varPro('Keterima', 'gerakan', 3),
        "4/Keterima" => $this->varPro('Keterima', 'gerakan', 4),
        "5/Keterima" => $this->varPro('Keterima', 'gerakan', 5),
        "6/Keterima" => $this->varPro('Keterima', 'gerakan', 6),
        "7/Keterima" => $this->varPro('Keterima', 'gerakan', 7),
        "8/Keterima" => $this->varPro('Keterima', 'gerakan', 8),
        "9/Keterima" => $this->varPro('Keterima', 'gerakan', 9),
        "10/Keterima" => $this->varPro('Keterima', 'gerakan', 10),

        "1/Tidak Keterima" => $this->varPro('Tidak Keterima', 'gerakan', 1),
        "2/Tidak Keterima" => $this->varPro('Tidak Keterima', 'gerakan', 2),
        "3/Tidak Keterima" => $this->varPro('Tidak Keterima', 'gerakan', 3),
        "4/Tidak Keterima" => $this->varPro('Tidak Keterima', 'gerakan', 4),
        "5/Tidak Keterima" => $this->varPro('Tidak Keterima', 'gerakan', 5),
        "6/Tidak Keterima" => $this->varPro('Tidak Keterima', 'gerakan', 6),
        "7/Tidak Keterima" => $this->varPro('Tidak Keterima', 'gerakan', 7),
        "8/Tidak Keterima" => $this->varPro('Tidak Keterima', 'gerakan', 8),
        "9/Tidak Keterima" => $this->varPro('Tidak Keterima', 'gerakan', 9),
        "10/Tidak Keterima" => $this->varPro('Tidak Keterima', 'gerakan', 10)
      ];

      $vokal = [
        "1/Keterima" => $this->varPro('Keterima', 'vokal', 1),
        "2/Keterima" => $this->varPro('Keterima', 'vokal', 2),
        "3/Keterima" => $this->varPro('Keterima', 'vokal', 3),
        "4/Keterima" => $this->varPro('Keterima', 'vokal', 4),
        "5/Keterima" => $this->varPro('Keterima', 'vokal', 5),
        "6/Keterima" => $this->varPro('Keterima', 'vokal', 6),
        "7/Keterima" => $this->varPro('Keterima', 'vokal', 7),
        "8/Keterima" => $this->varPro('Keterima', 'vokal', 8),
        "9/Keterima" => $this->varPro('Keterima', 'vokal', 9),
        "10/Keterima" => $this->varPro('Keterima', 'vokal', 10),

        "1/Tidak Keterima" => $this->varPro('Tidak Keterima', 'vokal', 1),
        "2/Tidak Keterima" => $this->varPro('Tidak Keterima', 'vokal', 2),
        "3/Tidak Keterima" => $this->varPro('Tidak Keterima', 'vokal', 3),
        "4/Tidak Keterima" => $this->varPro('Tidak Keterima', 'vokal', 4),
        "5/Tidak Keterima" => $this->varPro('Tidak Keterima', 'vokal', 5),
        "6/Tidak Keterima" => $this->varPro('Tidak Keterima', 'vokal', 6),
        "7/Tidak Keterima" => $this->varPro('Tidak Keterima', 'vokal', 7),
        "8/Tidak Keterima" => $this->varPro('Tidak Keterima', 'vokal', 8),
        "9/Tidak Keterima" => $this->varPro('Tidak Keterima', 'vokal', 9),
        "10/Tidak Keterima" => $this->varPro('Tidak Keterima', 'vokal', 10)
      ];

      $sikap = [
        "1/Keterima" => $this->varPro('Keterima', 'sikap', 1),
        "2/Keterima" => $this->varPro('Keterima', 'sikap', 2),
        "3/Keterima" => $this->varPro('Keterima', 'sikap', 3),
        "4/Keterima" => $this->varPro('Keterima', 'sikap', 4),
        "5/Keterima" => $this->varPro('Keterima', 'sikap', 5),

        "1/Tidak Keterima" => $this->varPro('Tidak Keterima', 'sikap', 1),
        "2/Tidak Keterima" => $this->varPro('Tidak Keterima', 'sikap', 2),
        "3/Tidak Keterima" => $this->varPro('Tidak Keterima', 'sikap', 3),
        "4/Tidak Keterima" => $this->varPro('Tidak Keterima', 'sikap', 4),
        "5/Tidak Keterima" => $this->varPro('Tidak Keterima', 'sikap', 5),
      ];

      $konsen = [
        "1/Keterima" => $this->varPro('Keterima', 'konsen', 1),
        "2/Keterima" => $this->varPro('Keterima', 'konsen', 2),
        "3/Keterima" => $this->varPro('Keterima', 'konsen', 3),
        "4/Keterima" => $this->varPro('Keterima', 'konsen', 4),
        "5/Keterima" => $this->varPro('Keterima', 'konsen', 5),

        "1/Tidak Keterima" => $this->varPro('Tidak Keterima', 'konsen', 1),
        "2/Tidak Keterima" => $this->varPro('Tidak Keterima', 'konsen', 2),
        "3/Tidak Keterima" => $this->varPro('Tidak Keterima', 'konsen', 3),
        "4/Tidak Keterima" => $this->varPro('Tidak Keterima', 'konsen', 4),
        "5/Tidak Keterima" => $this->varPro('Tidak Keterima', 'konsen', 5),
      ];

      return view('datatraining.index', [
        'total' => $total,
        'keterima' => $keterima,
        'tidak' => $tidak,
        'gerakan' => $gerakan,
        'vokal' => $vokal,
        'sikap' => $sikap,
        'konsen' => $konsen
      ]);
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
