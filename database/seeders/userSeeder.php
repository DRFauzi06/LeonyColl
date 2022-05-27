<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            // 'jenisBaju' => 'Gamis',
            'name' => 'admin',
            'level'=> 'admin',
            'password'=>bcrypt('admin'),
            'email' => 'admin@gmail.com'
            
        ],
        [
            'name' => 'dendi',
            'level'=> 'user',
            'password'=>bcrypt('twenty21'),
            'email' => 'dendi@gmail.com'
        ]]
    );
    }
}
