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
