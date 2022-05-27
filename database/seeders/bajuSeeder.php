<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class bajuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bajus')->insert([[
            // 'jenisBaju' => 'Gamis',
            'kodeBaju' => 'A01',
            'foto'=>'atasan.jpg',
            'ukuran' => 'XL',
            'jumlah' => '100'
        ],
        [
            'kodeBaju' => 'D02',
            'foto'=>'dress.jpg',
            'ukuran' => 'All Size',
            'jumlah' => '20'

        ],[
            // 'jenisBaju' => 'Gamis',
            'kodeBaju' => 'MD03',
            'foto'=>'midi.jpg',
            'ukuran' => 'L',
            'jumlah' => '10'
        ],
        [
            'kodeBaju' => 'T04',
            'foto'=>'tunik.jpg',
            'ukuran' => 'M',
            'jumlah' => '25'

        ]
        ]);
    }
}
