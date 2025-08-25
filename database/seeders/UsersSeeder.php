<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'jevonhs',
            'email' => 'jevonhs@gmail.com',
            'password' => bcrypt('jevon0291'),
            'role' => 'costumer',
            'noHp' => '085747261027',
            'alamat' => 'Jl.Diponegoro no 2 Parakan',
            'remember_token' => str::random(30),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'username' => 'adminpetshop',
            'email' => 'adminhs@gmail.com',
            'password' => bcrypt('ppadmin'),
            'role' => 'admin',
            'noHp' => '08574790909',
            'alamat' => 'Jl.Diponegoro no 2 Parakan',
            'remember_token' => str::random(30),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
