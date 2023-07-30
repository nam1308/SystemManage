<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'vendor_id' => 1,
                'name' => 'Phạm Thành Nam (System Administrator)',
                'email' => 'phamthanhnam1308@gmail.com',
                'password' => bcrypt('Namvui123@'),
                'role' => '1',
            ],
            [
                'vendor_id' => 1,
                'name' => 'Nam Phạm (Normal)',
                'email' => 'namt68065@gmail.com',
                'password' => bcrypt('Namvui123'),
                'role' => '21',
            ],
            [
                'vendor_id' => 1,
                'name' => 'Thành Nam',
                'email' => 'nam678132@gmail.com',
                'password' => bcrypt('Namvui123'),
                'role' => '11',
            ],
            [
                'vendor_id' => 1,
                'name' => 'Nam Nam',
                'email' => 'xuongperfume@gmail.com',
                'password' => bcrypt('Namvui123'),
                'role' => '11',
            ],
        ]);
    }
}
