<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_kategori')->insert([
            'id_kategori' => '1',
            'nama_kategori' => 'Fiksi',
        ]);
        DB::table('tb_kategori')->insert([
            'id_kategori' => '2',
            'nama_kategori' => 'Petualangan',
        ]);
        DB::table('tb_kategori')->insert([
            'id_kategori' => '3',
            'nama_kategori' => 'Drama',
        ]);
        DB::table('tb_kategori')->insert([
            'id_kategori' => '4',
            'nama_kategori' => 'Romance',
        ]);
    }
}
