@extends('template')
@section('content')

<div class="container mt-4">
    <h3 class="mb-4 text-center text-primary">Tambah Data Karyawan</h3>
    <hr class="mb-4">

    <div class="mb-4">
        <a href="/karyawan" class="btn btn-info"> Kembali</a>
    </div>

    <form action="/karyawan/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group row">
            <label class="control-label col-sm-2" for="kodepegawai">
                Kode Pegawai
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                       type="text"
                       id="kodepegawai"
                       placeholder="Masukkan Kode Pegawai (max 5 karakter)"
                       name="kodepegawai" required="required" maxlength="5">
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-sm-2" for="namalengkap">
                Nama Lengkap
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                       type="text"
                       id="namalengkap"
                       placeholder="Masukkan Nama Lengkap Karyawan"
                       name="namalengkap" required="required" maxlength="50">
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-2" for="divisi">
                Divisi
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                       type="text"
                       id="divisi"
                       placeholder="Masukkan Divisi (max 5 karakter)"
                       name="divisi" required="required" maxlength="5">
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-2" for="departemen">
                Departemen
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                       type="text"
                       id="departemen"
                       placeholder="Masukkan Nama Departemen"
                       name="departemen" required="required">
            </div>
        </div>

        <div class="form-group row mt-4">
            <div class="col-sm-8 offset-sm-2">
                <input type="submit" value="Simpan Data" class="btn btn-success">
            </div>
        </div>
    </form>
</div>

@endsection
