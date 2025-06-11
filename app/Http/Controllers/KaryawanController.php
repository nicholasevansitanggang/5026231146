<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function indexkaryawan()
    {
        $data = DB::table('karyawan')->paginate(10);
        return view('indexkaryawan', ['karyawan' => $data]);
    }

    public function tambah()
    {
        return view('tambahkaryawan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kodepegawai' => 'required|size:5|unique:karyawan,kodepegawai',
            'namalengkap' => 'required|max:50',
            'divisi'      => 'required|max:5',
            'departemen'  => 'required|max:10',
        ],
        [
            'kodepegawai.required' => 'Kode Pegawai wajib diisi.',
            'kodepegawai.size'     => 'Kode Pegawai harus terdiri dari 5 karakter.',
            'kodepegawai.unique'   => 'Kode Pegawai ini sudah terdaftar. Masukkan kode lain.',
            'namalengkap.required' => 'Nama Lengkap wajib diisi.',
            'namalengkap.max'      => 'Nama Lengkap maksimal 50 karakter.',
            'divisi.required'      => 'Divisi wajib diisi.',
            'divisi.max'          => 'Divisi max terdiri dari 5 karakter.',
            'departemen.required'  => 'Departemen wajib diisi.',
            'departemen.max'       => 'Departemen maksimal 10 karakter.'
        ]);

        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi'      => $request->divisi,
            'departemen'  => $request->departemen
        ]);
        return redirect('/karyawan')->with('success', 'Data karyawan berhasil ditambahkan!');
    }

    public function hapus($kodepegawai)
    {
        DB::table('karyawan')->where('kodepegawai', $kodepegawai)->delete();
        return redirect('/karyawan')->with('success', 'Data karyawan berhasil dihapus!');
    }
}
