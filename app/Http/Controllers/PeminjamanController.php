<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = 'Data Peminjaman';
        $q = $request->query('q');
        $pjm = Peminjaman::where('nama_user', 'like', '%' . $q . '%')
            ->join('tb_user', 'tb_user.id_user', 'tb_peminjaman.id_user')
            ->join('tb_buku', 'tb_buku.id_buku', 'tb_peminjaman.id_buku')
            //->get();
            ->paginate(10)
            ->withQueryString();
        $no = $pjm->firstItem();
        return view('peminjaman.index', compact('title', 'pjm', 'q', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Peminjaman';
        $books = Buku::orderBy('nama_buku')->get();
        return view('peminjaman.create', compact('title', 'books'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tgl_pinjam' => 'required',
            'id_buku' => 'required',
            'jumlah_pinjam' => 'required'
        ]);
        $peminjaman = new Peminjaman($request->all());
        $peminjaman->id_user = Auth::id();
        $peminjaman->save();
        return redirect()->route('peminjaman.index')->with(['message' => 'Data berhasil ditambah!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peminjaman $peminjaman)
    {
        $title='Ubah Buku';
        $books=Buku::orderBy('nama_buku')->get();
        $statuses=['Pinjam','Kembali'];
        return view("peminjaman.edit",compact('title','books','peminjaman','statuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        $peminjaman->update($request->all());
        return redirect()->route('peminjaman.index')->with(['message'=>'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjaman $peminjaman)
    {
        $peminjaman->delete();
        return redirect()->route('peminjaman.index')->with(['message' => 'Data berhasil dihapus!']);
    }
}
