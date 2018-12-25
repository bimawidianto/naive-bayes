@extends('partials.app')

@section('content')
  <style>
  input[type=text], select, input[type=number] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  }
  </style>

  <div class="container-fluid mt-5">
    <div class="panel panel-default">
      <table class="table table-dang">
        <tr>
          <th>
            <h2 class="text-center">Seleksi Anggota Baru</h2>
          </th>
        </tr>
      </table>
				<div class="panel-body">
					<div class="col-md-12">
					<p class="font-gray-dark">
			    <p></p>
          <form action="{{ route('result') }}" method="POST">
            {{ csrf_field() }}
            <table class="table table-sm">
              <thead>
                <th colspan="2">NAMA</th>
              </thead>
              <tbody>
                <td></td>
                <td>
                  <input type="text" name="nama" placeholder="Nama Lengkap" autofocus required>
                </td>
              </tbody>

              <thead>
                <tr>
                  <th>NILAI GERAKAN</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td>
                    <input type="number" name="gerakan" min="1" max="10" placeholder="Nilai 1 - 10" required>
                  </td>
                </tr>
              </tbody>

              <thead>
                <tr>
                  <th>NILAI VOKAL</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td>
                    <input type="number" name="vokal" min="1" max="10" placeholder="Nilai 1 - 10" required>
                  </td>
                </tr>
              </tbody>

              <thead>
                <tr>
                  <th>NILAI SIKAP</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td>
                    <input type="number" name="sikap" min="1" max="5" placeholder="Nilai 1 - 5" required>
                  </td>
                </tr>
              </tbody>

              <thead>
                <tr>
                  <th>NILAI KONSENTRASI</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td>
                    <input type="number" name="konsen" min="1" max="5" placeholder="Nilai 1 - 5" required>
                  </td>
                </tr>
              </tbody>
            </table>

            <button type="submit" class="btn btn-primary btn-block">PROSES</button>
          </form>
					</div>
			</div>
		</div>
  </div>
@endsection
