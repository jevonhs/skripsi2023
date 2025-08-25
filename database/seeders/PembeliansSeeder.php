<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembeliansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pembelians')->insert([
            'user_id' => '1',
            'penerima' => 'jevonhs',
            'alamat' => 'Jl.Diponegoro no 2 Parakan',
            'tanggal' => '2023-07-12',
            'jumlah_harga' => '415000',
            'bukti_bayar' => '1689164104.png',
            'status' => 'pending
        ']);

        DB::table('pembelians')->insert([
            'user_id' => '1',
            'penerima' => 'jevonhs',
            'alamat' => 'Jl.Diponegoro no 2 Parakan',
            'tanggal' => '2023-07-12',
            'jumlah_harga' => '6650000',
            'bukti_bayar' => '1689164187.jpg',
            'status' => 'pending
        ']);
    }
    
}
