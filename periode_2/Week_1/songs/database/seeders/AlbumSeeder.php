<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            'album_name' => 'albumName',
            'year' => '1999',
            'times_sold' => '1000',
        ]);

        DB::table('albums')->insert([
            'album_name' => 'albumName2',
            'year' => '1899',
            'times_sold' => '500',
        ]);

        DB::table('albums')->insert([
            'album_name' => 'albumName3',
            'year' => '2022',
            'times_sold' => '100',
        ]);
    }
}
