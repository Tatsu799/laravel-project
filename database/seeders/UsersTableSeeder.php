<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //   'id' => 1,
        //   'email' => 'taroh@hoge.com',
        //   'password' => Hash::make('taroh'),
        //   'name' => '松元太郎'
        // ]);
        // DB::table('users')->insert([
        //   'id' => 2,
        //   'email' => 'hanako@hoge.com',
        //   'password' => Hash::make('hanako'),
        //   'name' => '松元花子',
        // ]);
    }
}
