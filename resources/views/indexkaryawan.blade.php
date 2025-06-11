@extends('template')
@section('content')

<div class="container mt-4">
    <h3 class="mb-4 text-center text-primary">Daftar Karyawan</h3>
    <hr class="mb-4">

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
            <thead style="background-color: #0056b3; color: #ffffff;">
                <tr>
                    <th>Kode Pegawai</th>
                    <th>Nama Lengkap</th>
                    <th>Divisi</th>
                    <th class="text-center">Departemen</th>
                    <th class="text-center" style="width: 180px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($karyawan as $k)
                <tr>
                    <td>{{ $k->kodepegawai }}</td>
                    <td>{{ strtoupper($k->namalengkap) }}</td>
                    <td>{{ $k->divisi }}</td>
                    <td class="text-center">{{ strtolower($k->departemen) }}</td>
                    <td class="text-center">
                        <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-sm btn-danger" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data karyawan {{ $k->namalengkap }} ini?')">
                            Hapus
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-4 text-muted">
                        Data karyawan tidak ditemukan.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mb-1">
        <div class="col-md-6 mx-auto">
            <a href="/karyawan/tambah" class="btn btn-primary btn-block">
                + Tambah Karyawan Baru
            </a>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $karyawan->links('pagination::bootstrap-4') }}
    </div>
</div>

@endsection
