@extends('partials.app')

@section('content')
  <div class="container-fluid mt-5">
    <table class="table table-dang">
        <tr>
            <th><h2>Hasil</h2></th>
        </tr>
    </table>

    <div class="row mb-2">
      <div class="col-md-6">
        <table class="table table-sm">
          <!-- Total Tidak Keterima -->
          <tr>
            <td rowspan="2" class="align-middle">P1(Tidak Keterima)</td>
            <td rowspan="2" class="align-middle">=</td>
            <td>Total Tidak Keterima</td>
            <td rowspan="2" class="align-middle">=</td>
            <td>{{ $tidak }}</td>
          </tr>
          <tr>
            <td>Seluruh Data</td>
            <td>{{ $total }}</td>
          </tr>
          <!-- Gerakan -->
          <tr>
            <td rowspan="2" class="align-middle">P1(Gerakan {{ $gerakan }} | Tidak Keterima)</td>
            <td rowspan="2" class="align-middle">=</td>
            <td>Gerakan {{ $gerakan }} Tidak Keterima</td>
            <td rowspan="2" class="align-middle">=</td>
            <td>{{ $GT }}</td>
          </tr>
          <tr>
            <td>Total Tidak Keterima</td>
            <td>{{ $tidak }}</td>
          </tr>
          <!-- Vokal -->
          <tr>
            <td rowspan="2" class="align-middle">P1(Vokal {{ $vokal }} | Tidak Keterima)</td>
            <td rowspan="2" class="align-middle">=</td>
            <td>Vokal {{ $vokal }} Tidak Keterima</td>
            <td rowspan="2" class="align-middle">=</td>
            <td>{{ $VT }}</td>
          </tr>
          <tr>
            <td>Total Tidak Keterima</td>
            <td>{{ $tidak }}</td>
          </tr>
          <!-- Sikap -->
          <tr>
            <td rowspan="2" class="align-middle">P1(Sikap {{ $sikap }} | Tidak Keterima)</td>
            <td rowspan="2" class="align-middle">=</td>
            <td>Sikap {{ $sikap }} Tidak Keterima</td>
            <td rowspan="2" class="align-middle">=</td>
            <td>{{ $ST }}</td>
          </tr>
          <tr>
            <td>Total Tidak Keterima</td>
            <td>{{ $tidak }}</td>
          </tr>
          <!-- Konsen -->
          <tr>
            <td rowspan="2" class="align-middle">P1(Konsen {{ $konsen }} | Tidak Keterima)</td>
            <td rowspan="2" class="align-middle">=</td>
            <td>Konsen {{ $konsen }} Tidak Keterima</td>
            <td rowspan="2" class="align-middle">=</td>
            <td>{{ $KT }}</td>
          </tr>
          <tr>
            <td>Total Tidak Keterima</td>
            <td>{{ $tidak }}</td>
          </tr>
        </table>
      </div>

      <div class="col-md-6">
        <table class="table table-sm" style="background-color:#00d82b;">
          <!-- Total Diterima -->
          <tr>
            <td rowspan="2" class="align-middle">P2(Keterima)</td>
            <td rowspan="2" class="align-middle">=</td>
            <td>Total Keterima</td>
            <td rowspan="2" class="align-middle">=</td>
            <td>{{ $lulus }}</td>
          </tr>
          <tr>
            <td>Seluruh Data</td>
            <td>{{ $total }}</td>
          </tr>
          <!-- Gerakan -->
          <tr>
            <td rowspan="2" class="align-middle">P2(Gerakan {{ $gerakan }} | Keterima)</td>
            <td rowspan="2" class="align-middle">=</td>
            <td>Gerakan {{ $gerakan }} Keterima</td>
            <td rowspan="2" class="align-middle">=</td>
            <td>{{ $GK }}</td>
          </tr>
          <tr>
            <td>Total Keterima</td>
            <td>{{ $lulus }}</td>
          </tr>
          <!-- Vokal -->
          <tr>
            <td rowspan="2" class="align-middle">P2(Vokal {{ $vokal }} | Keterima)</td>
            <td rowspan="2" class="align-middle">=</td>
            <td>Vokal {{ $vokal }} Keterima</td>
            <td rowspan="2" class="align-middle">=</td>
            <td>{{ $VK }}</td>
          </tr>
          <tr>
            <td>Total Keterima</td>
            <td>{{ $lulus }}</td>
          </tr>
          <!-- Sikap -->
          <tr>
            <td rowspan="2" class="align-middle">P2(Sikap {{ $sikap }} | Keterima)</td>
            <td rowspan="2" class="align-middle">=</td>
            <td>Sikap {{ $sikap }} Keterima</td>
            <td rowspan="2" class="align-middle">=</td>
            <td>{{ $SK }}</td>
          </tr>
          <tr>
            <td>Total Keterima</td>
            <td>{{ $lulus }}</td>
          </tr>
          <!-- Konsen -->
          <tr>
            <td rowspan="2" class="align-middle">P2(Konsen {{ $konsen }} | Keterima)</td>
            <td rowspan="2" class="align-middle">=</td>
            <td>Konsen {{ $konsen }} Keterima</td>
            <td rowspan="2" class="align-middle">=</td>
            <td>{{ $KK }}</td>
          </tr>
          <tr>
            <td>Total Keterima</td>
            <td>{{ $lulus }}</td>
          </tr>
        </table>
      </div>

      <hr>

      <table class="table table-sm">
        <tr class="text-center">
          <td>Gerakan : {{ $gerakan }}</td>
          <td> * </td>
          <td>Vokal : {{ $vokal }}</td>
          <td> * </td>
          <td>Sikap : {{ $sikap }}</td>
          <td> * </td>
          <td>Konsentrasi : {{ $konsen }}</td>
        </tr>
        <tr class="text-center">
          <td>( {{ $TG }} / {{ $total }}  )</td>
          <td> * </td>
          <td>( {{ $TV }} / {{ $total }}  )</td>
          <td> * </td>
          <td>( {{ $TS }} / {{ $total }}  )</td>
          <td> * </td>
          <td>( {{ $TK }} / {{ $total }}  )</td>
        </tr>

      </table>

      <hr>
      <table class="table table-sm" style="background-color:#a0a0a0;">
        <tr>
          <td>
            <h1>TOTAL PERHITUNGAN PROBABILITAS</h1>
          </td>
        </tr>
        <tr>
          <td>
            <h3>P(Tidak Keterima) = {{ $PTidak }} / {{ $PX}} = {{ $TTidak }}</h3>
          </td>
        </tr>
        <tr>
          <td>
            <h3>P(Keterima) = {{ $PKeterima }} / {{ $PX}} = {{ $TKeterima }}</h3>
          </td>
        </tr>
        <tr>
          <td>
            <h3>HASIL PREDIKSI</h3>
          </td>
        </tr>
        <tr>
          <td>
            <h1 align="center">{{ $prediksi }}</h1>
          </td>
        </tr>
      </table>
    </div>
</div>
@endsection
