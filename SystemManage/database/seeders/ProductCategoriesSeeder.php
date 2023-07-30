<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            [
                'name' => 'Gói cá nhân',
                'price' => '1480',
                'trainer_count' => 1,
                'type' => 'small',
                'key' => 'price_1Mq4d5BwPV1VfiXGzsOnZJFz',
            ],
            [
                'name' => 'Gói doanh nghiệp nhỏ và vừa',
                'price' => '2980',
                'trainer_count' => 5,
                'type' => 'medium',
                'key' => 'price_1Mq4eNBwPV1VfiXGgkQMpSew',
            ],
            [
                'name' => 'kế hoạch doanh nghiệp lớn',
                'price' => '6980',
                'trainer_count' => 1000,
                'type' => 'large',
                'key' => 'price_1Mq4ezBwPV1VfiXGdJwqbEEy',
            ],
        ]);
    }
}
