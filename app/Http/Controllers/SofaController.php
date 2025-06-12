<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Sofa;

class SofaController extends Controller
{
        public function index()
    {
        $sofa = Sofa::paginate(10); // ini akan jadi koleksi Eloquent
        return view('sofa.index', compact('sofa'));
    }

    public function show($id)
    {
        $sofa = DB::table('sofa')->where('id', $id)->first();
        $image = [
            "https://images.unsplash.com/photo-1615874959474-d609969a2f93",
            "https://images.unsplash.com/photo-1600585154340-be6161a56a0c"
        ];
        return view('sofa.detail', ['sofa' => $sofa, 'image' => $image]);
    }

    public function tambah()
    {
        return view('sofa.tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'merksofa' => 'required|min:3|max:25',
            'hargasofa' => 'required|numeric',
            'tersedia' => 'required|boolean',
            'berat' => 'required|numeric'
        ]);

        DB::table('sofa')->insert([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);

        return redirect('/sofa')->with('success', 'Sofa berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $sofa = DB::table('sofa')->where('id', $id)->first();
        return view('sofa.edit', ['sofa' => $sofa]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'merksofa' => 'required|min:3|max:25',
            'hargasofa' => 'required|numeric',
            'tersedia' => 'required|boolean',
            'berat' => 'required|numeric'
        ]);

        DB::table('sofa')->where('id', $request->id)->update([
            'merksofa' => $request->merksofa,
            'hargasofa' => $request->hargasofa,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);

        return redirect('/sofa')->with('success', 'Sofa berhasil diupdate!');
    }

    public function delete($id)
    {
        DB::table('sofa')->where('id', $id)->delete();
        return redirect('/sofa')->with('success', 'Sofa berhasil dihapus!');
    }

    public function search(Request $request)
    {
        $cari = $request->cari;

        $sofa = DB::table('sofa')
            ->where('nama', 'like', "%".$cari."%")
            ->paginate();

        return view('sofa.index', ['sofa' => $sofa]);
    }
}
