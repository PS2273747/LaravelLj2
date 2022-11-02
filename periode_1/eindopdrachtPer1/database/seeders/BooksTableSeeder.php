<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => 'boek1',
            'author' => 'auteur1',
        ]);

        DB::table('books')->insert([
            'title' => 'boek2',
            'author' => 'auteur2',
        ]);

        DB::table('books')->insert([
            'title' => 'boek3',
            'author' => 'auteur3',
        ]);

        DB::table('books')->insert([
            'title' => 'boek4',
            'author' => 'auteur4',
        ]);
    }
}
