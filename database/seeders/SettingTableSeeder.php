<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Companybase\Models\Setting;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
       * Cài đặt
       */
      // Cài đặt chung
      $settings = [
        ['name' => 'logo', 'value' => null],
        ['name' => 'favicon', 'value' => null],
        ['name' => 'header', 'value' => 'Company'],
        ['name' => 'header-content', 'value' => 'Company'],
        ['name' => 'working-time', 'value' => '9h đến 20h, chủ nhật 10h đến 19h'],
        ['name' => 'email', 'value' => 'admin@gmail.com'],
        ['name' => 'phone', 'value' => '0987654321'],
        ['name' => 'fax', 'value' => '+ 84 (8) 24567889'],
        ['name' => 'address', 'value' => 'Ha Noi'],
        ['name' => 'facebook', 'value' => 'https://facbook.com'],
        ['name' => 'twitter', 'value' => 'https://twitter.com'],
        ['name' => 'instagram', 'value' => 'https://instagram.com'],
        ['name' => 'youtube', 'value' => 'https://youtube.com'],
        ['name' => 'link', 'value' => 'https://google.com'],
        ['name' => 'created_at', 'value' => date("Y-m-d")],
      ];

      Setting::insert($settings);
    }
}
