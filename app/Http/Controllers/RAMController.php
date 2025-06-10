<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RAMController extends Controller
{
    public function ram()
    {
        $data = DB::table('ram')->paginate(10);
        return view('ram', ['ram' => $data]);
    }

    public function tambah()
    {
        return view('tambahram');
    }

    public function store(Request $request)
    {
        DB::table('ram')->insert([
            'merkRAM'   => $request->merkRAM,
            'hargaRAM'  => $request->hargaRAM,
            'tersedia'  => $request->tersedia,
            'berat'     => $request->berat
        ]);
        return redirect('/ram');
    }

    public function edit($id)
    {
        $ram = DB::table('ram')
            ->where('ID', $id)
            ->get();
        return view('editram', ['ram' => $ram]);
    }

    public function update(Request $request)
    {
        DB::table('ram')->where('ID', $request->id)->update([
            'merkRAM'   => $request->merkRAM,
            'hargaRAM'  => $request->hargaRAM,
            'tersedia'  => $request->tersedia,
            'berat'     => $request->berat
        ]);
        return redirect('/ram');
    }

    public function hapus($id)
    {
        DB::table('ram')->where('ID', $id)->delete();
        return redirect('/ram');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $ram = DB::table('ram')
            ->where('merkRAM', 'like', "%" . $cari . "%")
            ->paginate();

        return view('ram', ['ram' => $ram]);
    }
}
