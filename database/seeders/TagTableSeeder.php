<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Companybase\Models\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            ['name' => 'hot', 'slug' => 'hot','status' => 'active'],
            ['name' => 'trendding', 'slug' => 'trendding','status' => 'active'],
        ];

        Tag::insert($settings);
    }
}
