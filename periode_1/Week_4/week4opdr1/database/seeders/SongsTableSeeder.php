<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            'title' => 'Nummer',
            'singer' => 'Zanger',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('songs')->insert([
            'title' => 'Hoi',
            'singer' => 'K3',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('songs')->insert([
            'title' => 'dingenHier',
            'singer' => 'MeMyselfAndI',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('songs')->insert([
            'title' => 'HahaJa',
            'singer' => 'De Kerstman',
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('songs')->insert([
            'title' => 'Pindakaas',
            'singer' => 'Helaas',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
    }
}
