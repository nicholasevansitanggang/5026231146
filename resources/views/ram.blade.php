@extends('template')
@section('content')

<div class="container mt-4">
    <h3 class="mb-4 text-center text-primary">Daftar RAM Komputer</h3>
    <hr class="mb-4">

    <div class="row mb-3 align-items-center justify-content-between">
        <div class="col-md-4 mb-2 mb-md-0">
            <a href="/ram/tambah" class="btn btn-primary btn-block">
                + Tambah RAM Baru
            </a>
        </div>
        <div class="col-md-5">
            <form action="/ram/cari" method="GET" class="form-inline d-flex">
                <div class="input-group flex-grow-1">
                    <input type="text" class="form-control" name="cari" placeholder="Cari merk RAM..." value="{{ request('cari') }}">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-outline-info">
                            Cari
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Merk</th>
                    <th>Harga</th>
                    <th class="text-center">Ketersediaan</th>
                    <th class="text-center">Berat (Kg)</th>
                    <th class="text-center" style="width: 180px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($ram as $r)
                <tr>
                    <td>{{ $r->merkRAM }}</td>
                    <td>Rp {{ number_format($r->hargaRAM, 0, ',', '.') }}</td>
                    <td class="text-center">
                        @if($r->tersedia == 1)
                            <span class="badge badge-success px-3 py-2">Tersedia</span>
                        @else
                            <span class="badge badge-danger px-3 py-2">Tidak Tersedia</span>
                        @endif
                    </td>
                    <td class="text-center">{{ number_format($r->berat, 2, ',', '.') }}</td>
                    <td class="text-center">
                        <a href="/ram/edit/{{ $r->ID }}" class="btn btn-sm btn-warning mr-1" title="Edit">
                            Edit
                        </a>
                        <a href="/ram/hapus/{{ $r->ID }}" class="btn btn-sm btn-danger" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data RAM {{ $r->merkRAM }} ini?')">
                            Hapus
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-4 text-muted">
                        Data RAM tidak ditemukan.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $ram->links('pagination::bootstrap-4') }}
    </div>
</div>

@endsection
