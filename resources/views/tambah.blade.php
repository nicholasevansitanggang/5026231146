@extends('template')
@section('content')

	<h3  >Data Pegawai</h3>

	<a href="/pegawai" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group has-success">
                <label class="control-label col-sm-2" for="nama">
                    Nama
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                           type="text"
                           id="nama"
                           placeholder="Masukkan Nama Lengkap"
                           name="nama" required="required"></textarea>
                </div>
        </div>
        <div class="form-group has-success">
                <label class="control-label col-sm-2" for="jabatan">
                    Jabatan
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                           type="text"
                           id="jabatan"
                           placeholder="Masukkan Jabatan Anda"
                           name="jabatan" required="required"></textarea>
                </div>
        </div>

        <div class="form-group has-success">
                <label class="control-label col-sm-2" for="umur">
                    Umur
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                           type="text"
                           id="umur"
                           placeholder="Masukkan Umur Anda"
                           name="umur" required="required"></textarea>
                </div>
        </div>

		<div class="form-group has-success">
                <label class="control-label col-sm-2" for="alamat">
                    Alamat
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                           type="text"
                           id="alamat"
                           placeholder="Masukkan Alamat Lengkap dan Kota"
                           name="alamat" required="required"></textarea>
                </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

    @endsection
</body>
</html>
