@extends('partials.app')

@section('asset-atas')
  <link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/datatables/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }}">
@endsection

@section('content')
  <div class="panel panel-default mt-5">
    <table class="table table-dang">
      <tr>
        <th>
          <h2 class="text-center">DATA TRAINING</h2>
        </th>
      </tr>
    </table>
    <div class="row m-t-25">
      <div class="table-responsive">
        <div class="table-responsive table--no-card m-b-30">
          <table class="table table-borderless table-striped table-earning" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Total</th>
                <th>Keterima</th>
                <th>Tidak Keterima</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{ $total }}</td>
                <td>{{ $keterima }}</td>
                <td>{{ $tidak }}</td>
              </tr>
            </tbody>
          </table>

          <div class="row">
            <div class="col-md-6">
              <table class="table table-borderless table-striped table-earning">
                <thead>
                  <tr>
                    <th>Nilai Gerakan</th>
                    <th>Keterima</th>
                    <th>Tidak Keterima</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>{{ $gerakan['1/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $gerakan['1/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>{{ $gerakan['2/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $gerakan['2/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>{{ $gerakan['3/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $gerakan['3/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>{{ $gerakan['4/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $gerakan['4/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>{{ $gerakan['5/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $gerakan['5/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>{{ $gerakan['6/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $gerakan['6/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>{{ $gerakan['7/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $gerakan['7/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>{{ $gerakan['8/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $gerakan['8/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>{{ $gerakan['9/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $gerakan['9/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>{{ $gerakan['10/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $gerakan['10/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-md-6">
              <table class="table table-borderless table-striped table-earning">
                <thead>
                  <tr>
                    <th>Nilai Vokal</th>
                    <th>Keterima</th>
                    <th>Tidak Keterima</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>{{ $vokal['1/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $vokal['1/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>{{ $vokal['2/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $vokal['2/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>{{ $vokal['3/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $vokal['3/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>{{ $vokal['4/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $vokal['4/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>{{ $vokal['5/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $vokal['5/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>{{ $vokal['6/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $vokal['6/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>{{ $vokal['7/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $vokal['7/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>{{ $vokal['8/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $vokal['8/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>{{ $vokal['9/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $vokal['9/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>{{ $vokal['10/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $vokal['10/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <table class="table table-borderless table-striped table-earning">
                <thead>
                  <tr>
                    <th>Nilai Sikap</th>
                    <th>Keterima</th>
                    <th>Tidak Keterima</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>{{ $sikap['1/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $sikap['1/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>{{ $sikap['2/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $sikap['2/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>{{ $sikap['3/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $sikap['3/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>{{ $sikap['4/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $sikap['4/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>{{ $sikap['5/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $sikap['5/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-md-6">
              <table class="table table-borderless table-striped table-earning">
                <thead>
                  <tr>
                    <th>Nilai Konsentrasi</th>
                    <th>Keterima</th>
                    <th>Tidak Keterima</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>{{ $konsen['1/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $konsen['1/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>{{ $konsen['2/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $konsen['2/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>{{ $konsen['3/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $konsen['3/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>{{ $konsen['4/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $konsen['4/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>{{ $konsen['5/Keterima'] }}/{{ $keterima }}</td>
                    <td>{{ $konsen['5/Tidak Keterima'] }}/{{ $tidak }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.panel-->
@endsection

@section('asset-bawah')
  {{-- <script src="{{ asset('vendor/fontawesome/js/fontawesome.min.js') }}"></script> --}}
  <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('vendor/datatables/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('vendor/datatables/responsive.bootstrap4.min.js') }}"></script>
@endsection
