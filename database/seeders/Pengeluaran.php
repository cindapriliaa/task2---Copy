<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModeEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengeluaranSeeder extends Seeder
{
    /**
     * 
     * @return void
     * Seed the application's database.
     */
    public function run()
    {
       DB::table('pengeluaran')->insert( [
            'tanggal' => '2023-01-13',
            'kategori' => 'Pendidikan',
            'catatan' => 'UKT',
            'tanggal' => '2023-01-15',
            'kategori' => 'Transportasi',
            'catatan' => 'Gojek'
        ]);
    }
}