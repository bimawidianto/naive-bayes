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
          <h2 class="text-center">DAFTAR PESERTA SELEKSI</h2>
        </th>
        <td>

        </td>
      </tr>
    </table>
    <div class="row m-t-25">
      <div class="table-responsive">
        <div class="table-responsive table--no-card m-b-30">
          <table class="table table-borderless table-striped table-earning" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th></th>
                <th>NAMA</th>
                <th>NILAI GERAKAN</th>
                <th>NILAI VOKAL</th>
                <th>NILAI SIKAP</th>
                <th>NILAI KONSENTRASI</th>
                <th>KETERANGAN</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $ds)
                <tr>
                  <td></td>
                  <td>{{ $ds->nama }}</td>
                  <td>{{ $ds->gerakan }}</td>
                  <td>{{ $ds->vokal }}</td>
                  <td>{{ $ds->sikap }}</td>
                  <td>{{ $ds->konsen }}</td>
                  <td>{{ $ds->keterangan }}</td>
                  <td></td>
                </tr>
              @endforeach
            </tbody>
          </table>
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
  <script>
    $(document).ready(function(){
      var t = $("#dataTable").DataTable({
        "columnDefs" : [{
          "searchable" : false,
          "orderable" : false,
          "targets" : 0
        }],
        "order" : [[1, 'asc']]
      });

      t.on('order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
      }).draw();
    });
  </script>
@endsection
