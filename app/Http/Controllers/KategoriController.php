<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = 'Data Kategori';
        //$books = Buku::get();
        //return view('buku.index', compact('title', 'books'));
        $q = $request->query('q');
        $ktg = Kategori::where('nama_kategori', 'like', '%' . $q . '%')
            //->get();
            ->paginate(10)
            ->withQueryString();
        $no = $ktg->firstItem();
        return view('kategori.index', compact('title', 'ktg', 'q', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Kategori';
        $ktg = Kategori::orderBy('nama_kategori')->get();
        return view('kategori.create', compact('title', 'ktg'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required',
        ]);
        $kategori = new Kategori($request->all());
        $kategori->save();
        return redirect()->route('kategori.index')->with(['message' => 'Data berhasil ditambah!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        $title = 'Ubah Kategori';
        $kategoris = Kategori::orderBy('nama_kategori')->get();
        return view('kategori.edit', compact('title', 'kategori', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        $kategori->update($request->all());
        return redirect()->route('kategori.index')->with(['message' => 'Data berhasil diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return redirect()->route('kategori.index')->with(['message' => 'Data berhasil dihapus!']);
    }
}
