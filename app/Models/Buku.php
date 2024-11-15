<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'tb_buku';
    protected $primaryKey = 'id_buku';

    protected $fillable = ['nama_buku','id_kategori', 'tahun_terbit', 'stok',  'penulis', 'gambar'];

    public function getImage()
    {
        if ($this->gambar && file_exists(public_path('images/buku/' . $this->gambar)))
            return asset('images/buku/' . $this->gambar);
        else
            return asset('images/no_image.png');
    }
}
