<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SuperAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('super_admins')->insert([
            [
                'name' => 'Phạm Thành Nam (System Administrator)',
                'email' => 'phamthanhnam1308@gmail.com',
                'password' => bcrypt('Namvui123@'),
                'role' => '1',
            ],
            [
                'name' => 'Thành Nam (System Administrator)',
                'email' => 'namt68065@gmail.com',
                'password' => bcrypt('Namvui123@'),
                'role' => '1',
            ],
            [
                'name' => 'Phạm Nam（System Administrator）',
                'email' => 'nam678132@gmail.com',
                'password' => bcrypt('Namvui123@'),
                'role' => '1',
            ],
        ]);
    }
}
