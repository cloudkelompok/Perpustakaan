<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_peminjaman')->insert([
            'id_user' => '1',
            'id_buku' => '1',
            'jumlah_pinjam' => '2',
            'tgl_pinjam' => '2023-06-12',
            'tgl_kembali' => '2023-06-19',
            'status_peminjaman' => 'kembali',
            'denda' => '0',
        ]);
        DB::table('tb_peminjaman')->insert([
            'id_user' => '3',
            'id_buku' => '2',
            'jumlah_pinjam' => '2',
            'tgl_pinjam' => '2023-12-06',
            'status_peminjaman' => 'Pinjam',
        ]);
        DB::table('tb_peminjaman')->insert([
            'id_user' => '3',
            'id_buku' => '7',
            'jumlah_pinjam' => '2',
            'tgl_pinjam' => '2023-12-06',
            'status_peminjaman' => 'Pinjam',
        ]);
        DB::table('tb_peminjaman')->insert([
            'id_user' => '1',
            'id_buku' => '5',
            'jumlah_pinjam' => '6',
            'tgl_pinjam' => '2023-12-13',
            'tgl_kembali' => '2023-12-20',
            'status_peminjaman' => 'kembali',
            'denda' => '10000',
        ]);
        DB::table('tb_peminjaman')->insert([
            'id_user' => '1',
            'id_buku' => '8',
            'jumlah_pinjam' => '2',
            'tgl_pinjam' => '2023-12-13',
            'tgl_kembali' => '2023-12-22',
            'status_peminjaman' => 'kembali',
            'denda' => '15000',
        ]);
        DB::table('tb_peminjaman')->insert([
            'id_user' => '2',
            'id_buku' => '18',
            'jumlah_pinjam' => '1',
            'tgl_pinjam' => '2023-07-08',
            'tgl_kembali' => '2023-07-15',
            'status_peminjaman' => 'kembali',
            'denda' => '5000',
        ]);
        DB::table('tb_peminjaman')->insert([
            'id_user' => '2',
            'id_buku' => '13',
            'jumlah_pinjam' => '2',
            'tgl_pinjam' => '2023-07-11',
            'status_peminjaman' => 'Pinjam',
        ]);
    }
}
