<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'HP i5 4GB',
            'price' => '15000000',
            'description' => 'Đẹp miễn chê, nhanh khỏi bàn',
            'category_id' => 1,
            'active' => 'Hoạt động'
        ]);

        DB::table('products')->insert([
            'name' => 'Samsung Note10 plus 4GB',
            'price' => '22000000',
            'description' => 'Đẹp miễn chê, nhanh khỏi bàn',
            'category_id' => 2,
            'active' => 'Hoạt động'
        ]);

        DB::table('products')->insert([
            'name' => 'Dell i3 4GB',
            'price' => '8000000',
            'description' => 'Đẹp miễn chê, nhanh khỏi bàn',
            'category_id' => 1,
            'active' => 'Đã xóa'
        ]);

        DB::table('products')->insert([
            'name' => 'Oppo A9 plus 4GB',
            'price' => '6000000',
            'description' => 'Đẹp miễn chê, nhanh khỏi bàn',
            'category_id' => 2,
            'active' => 'Đã xóa'
        ]);
    }
}
