@extends('template')
@section('content')

	<h3  >Data RAM</h3>

	<a href="/ram" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/ram/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group has-success">
                <label class="control-label col-sm-2" for="merkRAM">
                    Merk RAM
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                           type="text"
                           id="merkRAM"
                           placeholder="Masukkan Merk Lengkap"
                           name="merkRAM" required="required">
                </div>
        </div>
        <div class="form-group has-success">
                <label class="control-label col-sm-2" for="hargaRAM">
                    Harga RAM
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                           type="text"
                           id="hargaRAM"
                           placeholder="Masukkan Harga RAM"
                           name="hargaRAM" required="required">
                </div>
        </div>

        <div class="form-group has-success">
                <label class="control-label col-sm-2" for="tersedia">
                    Ketersediaan
                </label>
                <div class="col-sm-6">
                    <select class="form-control" name="tersedia" id="tersedia" required="required">
                        <option value="1">Tersedia</option>
                        <option value="0">Tidak Tersedia</option>
                    </select>
                </div>
        </div>

		<div class="form-group has-success">
                <label class="control-label col-sm-2" for="berat">
                    Berat (Kg)
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                            type="number"
                            step="0.01"
                           id="berat"
                           placeholder="Masukkan Berat RAM (kg)"
                           name="berat" required="required">
                </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

    @endsection
