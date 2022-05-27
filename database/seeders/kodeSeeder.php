<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class kodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kodes')->insert([
            [
            'jenisBaju' => 'Atasan',
            'kodeBaju' => 'A01'
            ],
            [
            'jenisBaju' => 'Dress',
            'kodeBaju' => 'D02'
            ],
            [
            'jenisBaju' => 'Midi Dress',
            'kodeBaju' => 'MD03'
            ],
            [
            'jenisBaju' => 'Tunik',
            'kodeBaju' => 'T04'
            ],

            
            
        ]);
    }
}
