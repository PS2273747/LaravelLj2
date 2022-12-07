<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB ::table('songs')->insert([
            'song_name' => 'Teleromeo',
            'singer_name' => 'k3'
        ]);

        DB ::table('songs')->insert([
            'song_name' => 'Pretender',
            'singer_name' => 'FooFighters'
        ]);

        DB ::table('songs')->insert([
            'song_name' => 'EenSong',
            'singer_name' => 'EenSinger'
        ]);


    }
}
