<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = DB::table('karyawan')->paginate(10);
        return view('karyawan.index', compact('karyawan'));
    }

    public function tambah()
    {
        return view('karyawan.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kodepegawai' => 'required|size:5',
            'namalengkap' => 'required|max:50',
            'divisi' => 'required|size:5',
            'departemen' => 'required|integer',
        ]);

        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

        return redirect('/karyawan')->with('success', 'Data karyawan berhasil ditambahkan!');
    }

    public function edit($kodepegawai)
    {
        $karyawan = DB::table('karyawan')->where('kodepegawai', $kodepegawai)->first();
        return view('karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'kodepegawai' => 'required|size:5',
            'namalengkap' => 'required|max:50',
            'divisi' => 'required|size:5',
            'departemen' => 'required|integer',
        ]);

        DB::table('karyawan')->where('kodepegawai', $request->kodepegawai)->update([
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

        return redirect('/karyawan')->with('success', 'Data karyawan berhasil diperbarui!');
    }

    public function delete($kodepegawai)
    {
        DB::table('karyawan')->where('kodepegawai', $kodepegawai)->delete();
        return redirect('/karyawan')->with('success', 'Data karyawan berhasil dihapus!');
    }


    public function search(Request $request)
    {
        $cari = $request->cari;
        $karyawan = DB::table('karyawan')
            ->where('namalengkap', 'like', "%".$cari."%")
            ->paginate(10);

        return view('karyawan.index', compact('karyawan'));
    }
}
