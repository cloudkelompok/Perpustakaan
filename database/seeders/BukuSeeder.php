<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_buku')->insert([
            'nama_buku' => 'Laut Bercerita',
            'tahun_terbit' => '2017',
            'penulis' => 'Leila S. Chudori',
            'id_kategori' => '1',
            'stok' => '5',
            'gambar' => '7052laut_bercerita.png',
        ]);
        DB::table('tb_buku')->insert([
            'nama_buku' => 'A Thrilling Night',
            'tahun_terbit' => '2020',
            'penulis' => 'Tere Liye',
            'id_kategori' => '1',
            'stok' => '10',
            'gambar' => '8266hello.png',
        ]);
        DB::table('tb_buku')->insert([
            'nama_buku' => 'Sang Pemimpi',
            'tahun_terbit' => '2006',
            'penulis' => 'Andrea Hirata',
            'id_kategori' => '1',
            'stok' => '15',
            'gambar' => '5833sang_pemimpi.png',
        ]);
        DB::table('tb_buku')->insert([
            'nama_buku' => 'Cantik itu Luka',
            'tahun_terbit' => '2002',
            'penulis' => 'Eka Kurniawan',
            'id_kategori' => '1',
            'stok' => '10',
            'gambar' => '8093cantik_itu_luka.png',
        ]);
        DB::table('tb_buku')->insert([
            'nama_buku' => '5 cm',
            'tahun_terbit' => '2005',
            'penulis' => 'Donny Dhirgantoro',
            'id_kategori' => '2',
            'stok' => '6',
            'gambar' => '68775cm.png',
        ]);
        DB::table('tb_buku')->insert([
            'nama_buku' => 'Tujuh Kelana',
            'tahun_terbit' => '2020',
            'penulis' => 'Nellaneva',
            'id_kategori' => '1',
            'stok' => '5',
            'gambar' => '1927tujuh_kelana.png',
        ]);
        DB::table('tb_buku')->insert([
            'nama_buku' => '00.00',
            'tahun_terbit' => '2021',
            'penulis' => 'Ameylia Falensia',
            'id_kategori' => '1',
            'stok' => '9',
            'gambar' => '137600.00.png',
        ]);
        DB::table('tb_buku')->insert([
            'nama_buku' => 'Hujan',
            'tahun_terbit' => '2016',
            'penulis' => 'Tere Liye',
            'id_kategori' => '3',
            'stok' => '15',
            'gambar' => '7288hujan.png',
        ]);
        DB::table('tb_buku')->insert([
            'nama_buku' => 'The Star and I',
            'tahun_terbit' => '2021',
            'penulis' => 'Ilana Tan',
            'id_kategori' => '4',
            'stok' => '10',
            'gambar' => '1084the_star_and_i.png',
        ]);
        DB::table('tb_buku')->insert([
            'nama_buku' => 'Negeri 5 Menara',
            'tahun_terbit' => '2009',
            'penulis' => 'Ahmad Fuadi',
            'id_kategori' => '1',
            'stok' => '5',
            'gambar' => '2018negeri_5_menara.png',
        ]);
    }
}
