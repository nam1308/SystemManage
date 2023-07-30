<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Phạm Thành Nam',
                'email' => 'namt68065@gmail.com',
                'password' => bcrypt('Namvui123@'),
            ],
        ]);
    }
}
