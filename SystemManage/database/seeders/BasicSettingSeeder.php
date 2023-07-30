<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BasicSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('basic_settings')->insert([
            'vendor_id' => 1,
            'company_name' => '',
            'company_name_kana' => 'Công ty TNHH Phạm Thành Nam',
            'postal_code' => '6640858',
            'prefecture_id' => '28',
            'municipality' => 'đường Nguyễn Văn Huyên, thành phố Hà Nội',
            'address_building_name' => 'Tòa nhà 6th Element',
            'phone_number_1' => '012950125',
            'phone_number_2' => '012959189',
            'phone_number_3' => '012589182',
            'business_hours' => 'Các ngày trong tuần 09:00-18:00',
        ]);
    }
}
