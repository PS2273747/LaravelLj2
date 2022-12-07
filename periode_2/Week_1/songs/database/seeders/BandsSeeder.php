<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bands')->insert([
            'band_name' => 'band1',
            'genre' => 'jazz',
            'founded' => '1900',
        ]);

        DB::table('bands')->insert([
            'band_name' => 'band2',
            'genre' => 'rock',
            'founded' => '1800',
        ]);

        DB::table('bands')->insert([
            'band_name' => 'band3',
            'genre' => 'pop',
            'founded' => '2022',
        ]);
    }
}
