<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $title = 'Home';

        $jumlah_user = User::count();
        $jumlah_buku = Buku::count();
        $jumlah_peminjaman = Peminjaman::count();
        $total_denda = Peminjaman::sum('denda');

        $pjm = Peminjaman::selectRaw('tgl_pinjam, COUNT(id_peminjaman) AS total')->groupBy('tgl_pinjam')->limit(30)->get();
        $data = [];
        $ktg = [];
        foreach ($pjm as $peminjaman) {
            $data[] = $peminjaman->total * 1;
            $ktg[] = $peminjaman->tgl_pinjam;
        }

        return view('home', compact('title', 'jumlah_user', 'jumlah_buku', 'jumlah_peminjaman', 'total_denda', 'data', 'ktg'));
    }
}
