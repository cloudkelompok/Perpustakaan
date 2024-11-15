<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class BukuController extends Controller
{
   
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = 'Data Buku';
        //$books = Buku::get();
        //return view('buku.index', compact('title', 'books'));
        $q = $request->query('q');
        $books = Buku::where('nama_buku', 'like', '%' . $q . '%')
            ->leftjoin('tb_kategori', 'tb_kategori.id_kategori', 'tb_buku.id_kategori')
            //->get();
            ->paginate(10)
            ->withQueryString();
        $no = $books->firstItem();
        return view('buku.index', compact('title', 'books', 'q', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Buku';
        $kategoris = Kategori::orderBy('nama_kategori')->get();
        return view('buku.create', compact('title', 'kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_buku' => 'required',
            'id_kategori' => 'required',
            'tahun_terbit' => 'required',
            'penulis' => 'required',
            'stok' => 'required',
        ]);
        $buku = new Buku($request->all());

        if ($request->file('gambar')) {
            $gambar = $request->file('gambar');
            $filename = rand(1000, 9999) . $gambar->getClientOriginalName();
            $gambar->move('images/buku', $filename);
            $buku->gambar = $filename;
        }

        $buku->save();
        return redirect()->route('buku.index')->with(['message' => 'Data berhasil ditambah!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        $title = 'Ubah Buku';
        $kategoris = Kategori::orderBy('nama_kategori')->get();
        return view('buku.edit', compact('title', 'buku', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'nama_buku' => 'required',
            'id_kategori' => 'required',
            'tahun_terbit' => 'required',
            'penulis' => 'required',
            'stok' => 'required',
        ]);
        $data = $request->all();
        if ($request->file('gambar')) {
            $gambar = $request->file('gambar');
            $filename = rand(1000, 9999) . $gambar->getClientOriginalName();
            $gambar->move('images/buku', $filename);
            $data['gambar'] = $filename;
        }
        $buku->update($data);
        return redirect()->route('buku.index')->with(['message' => 'Data berhasil diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();
        return redirect()->route('buku.index')->with(['message' => 'Data berhasil dihapus!']);
    }
}
