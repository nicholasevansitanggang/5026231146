@extends('template')
@section('content')
    <h3>Edit Data RAM</h3>

    <a href="/ram" class="btn btn-info">Kembali</a>
    <br /><br />

    @foreach ($ram as $r)
        <form action="/ram/update" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $r->ID }}">

            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="merkRAM">Merk RAM</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="merkRAM" name="merkRAM"
                        value="{{ $r->merkRAM }}" placeholder="Masukkan Merk RAM" required>
                </div>
            </div>

            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="hargaRAM">Harga RAM</label>
                <div class="col-sm-6">
                    <input class="form-control" type="number" id="hargaRAM" name="hargaRAM"
                        value="{{ $r->hargaRAM }}" placeholder="Masukkan Harga RAM" required>
                </div>
            </div>

            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="tersedia">Ketersediaan</label>
                <div class="col-sm-6">
                    <select class="form-control" id="tersedia" name="tersedia" required>
                        <option value="1" {{ $r->tersedia == 1 ? 'selected' : '' }}>Tersedia</option>
                        <option value="0" {{ $r->tersedia == 0 ? 'selected' : '' }}>Tidak Tersedia
                        </option>
                    </select>
                </div>
            </div>

            <div class="form-group has-success">
                <label class="control-label col-sm-2" for="berat">Berat (Kg)</label>
                <div class="col-sm-6">
                    <input class="form-control" type="number" step="0.01" id="berat"
                        name="berat" value="{{ $r->berat }}" placeholder="Masukkan Berat RAM (kg)" required>
                </div>
            </div>

            <input type="submit" value="Simpan Data" class="btn btn-success">
        </form>
    @endforeach
@endsection
