<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'tb_peminjaman';
    protected $primaryKey = 'id_peminjaman';

    protected $fillable = ['id_user', 'id_buku', 'tgl_pinjam', 'tgl_kembali', 'status_peminjaman', 'jumlah_pinjam', 'denda'];
}
