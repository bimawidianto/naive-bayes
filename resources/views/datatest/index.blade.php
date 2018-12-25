@extends('partials.app')

@section('asset-atas')
  <link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/datatables/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/fontawesome.min.css') }}">
@endsection

@section('content')
  <div class="panel panel-default mt-5">
    <table class="table table-dang">
      <tr>
        <th>
          <h2 class="text-center">DATA TESTING</h2>
        </th>
        <td>
          <form action="result" method="get">
            <button type="submit" class="btn btn-primary">PROSES</button>
          </form>
        </td>
      </tr>
    </table>
    <div class="row m-t-25">
      <div class="table-responsive">
        <div class="table-responsive table--no-card m-b-30">
          <table class="table table-border table-hover table-earning" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th></th>
                <th>NILAI GERAKAN</th>
                <th>NILAI VOKAL</th>
                <th>NILAI SIKAP</th>
                <th>NILAI KONSENTRASI</th>
                <th>KETERANGAN</th>
                <th>PREDIKSI</th>
                {{-- <th></th> --}}
              </tr>
            </thead>
            <tbody>
              @php  $no++; $ket = "Keterima"; @endphp
              @foreach ($all->sortBy('nama') as $ds)
                <tr>
                  <th>{{ $no++ }}</th>
                  <td>{{ $ds->gerakan }}</td>
                  <td>{{ $ds->vokal }}</td>
                  <td>{{ $ds->sikap }}</td>
                  <td>{{ $ds->konsen }}</td>
                  {{-- <td>{{ $ds->keterangan }}</td>
                  <td>{{ $ds->datatest['prediksi'] }}</td> --}}

                  @if ($ket == $ds->keterangan)
                    <td bgcolor="#00FF00">
                      {{ $ds->keterangan }}
                    </td>
                  @else
                    <td bgcolor="#FF0000">
                      {{ $ds->keterangan }}
                    </td>
                  @endif

                  @if ($ket == $ds->datatest['prediksi'])
                    <td bgcolor="#00FF00">
                      {{ $ds->datatest['prediksi'] }}
                    </td>
                  @elseif (is_null($ds->datatest['prediksi']))
                    <td>
                      {{ $ds->datatest['prediksi'] }}
                    </td>
                  @else
                    <td bgcolor="#FF0000">
                      {{ $ds->datatest['prediksi'] }}
                    </td>
                  @endif

                  {{-- @if (is_null($ds->datatest['prediksi']))
                    <td>
                      <form action="{{ route('datatest.run')}}" method="POST">
                      {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $ds->id }}">
                        <input type="hidden" name="gerakan" value="{{ $ds->gerakan }}" >
                        <input type="hidden" name="vokal" value="{{ $ds->vokal }}" >
                        <input type="hidden" name="sikap" value="{{ $ds->sikap }}" >
                        <input type="hidden" name="konsen" value="{{ $ds->konsen }}">
                      <button type="submit" class="btn btn-primary">PROSES</button>
                      </form>
                    </td>
                  @else
                    <td></td>
                  @endif --}}
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="row">
        <table>
          <thead>
            <tr>
              <th>PRESENTASE SUKSES</th>
              <td> = </td>
              <td>{{$psukses}}%</td>
            </tr>
          </thead>
          <thead>
            <tr>
              <th>PRESENTASE ERROR</th>
              <td> = </td>
              <td>{{$perror}}%</td>
            </tr>
          </thead>
        </table>
    </div>
  </div><!-- /.panel-->
@endsection

@section('asset-bawah')
  <script src="{{ asset('vendor/fontawesome/js/fontawesome.min.js') }}"></script>
  <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('vendor/datatables/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('vendor/datatables/responsive.bootstrap4.min.js') }}"></script>
  {{-- <script>
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
  </script> --}}
@endsection
