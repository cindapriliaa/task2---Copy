<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModeEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PemasukanSeeder extends Seeder
{
    /**
     * 
     * @return void
     * Seed the application's database.
     */
    public function run()
    {
       DB::table('pemasukan')->insert( [
            'tanggal' => '2023-01-20',
            'kategori' => 'Uang Saku',
            'catatan' => 'TF',
            'tanggal' => '2023-01-27',
            'kategori' => 'Upah',
            'catatan' => 'Joki'
        ]);
    }
}