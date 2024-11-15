<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_user')->insert([
            'nama_user' => 'Administrator',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'level' => 'admin'
        ]);
        DB::table('tb_user')->insert([
            'nama_user' => 'Roseane',
            'email' => 'roseane11@gmail.com',
            'username' => 'Rose',
            'password' => Hash::make('rose123'),
            'level' => 'admin'
        ]);
        DB::table('tb_user')->insert([
            'nama_user' => 'Grace Yuna',
            'email' => 'yunash09@gmail.com',
            'username' => 'Yuna',
            'password' => Hash::make('yuna09'),
            'level' => 'user'
        ]);
    }
}
