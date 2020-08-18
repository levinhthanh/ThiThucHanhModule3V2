<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title' => 'Laptop',
            'description' => 'he 1500s, when an unknown printer took a galley of type and scrambled it to make a type speci'
        ]);

        DB::table('categories')->insert([
            'title' => 'Điện thoại',
            'description' => 'when an unknown printer took a galley of type and scrambled it to make a type speci'
        ]);

        DB::table('categories')->insert([
            'title' => 'Tivi',
            'description' => ' printer took a galley of type and scrambled it to make a type speci'
        ]);


    }
}
