<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_categories')->insert([
            [
                "name"=>"AC",
                "slug"=>"ac",
                "image"=>"1521969345.png",
            ],
            [
                "name"=>"Beauty",
                "slug"=>"beauty",
                "image"=>"1521969358.png",
            ],
            [
                "name"=>"Plumber",
                "slug"=>"plumber",
                "image"=>"1521969409.png",
            ],
            [
                "name"=>"Electrician",
                "slug"=>"electrician",
                "image"=>"1521969419.png",
            ],
            [
                "name"=>"Cleaner",
                "slug"=>"cleaner",
                "image"=>"1521969446.png",
            ],
            [
                "name"=>"Driver",
                "slug"=>"driver",
                "image"=>"1521969599.png",
            ],
            [
                "name"=>"Painter",
                "slug"=>"painter",
                "image"=>"1521972643.png",
            ],
            [
                "name"=>"Shower Filter",
                "slug"=>"shower-filter",
                "image"=>"1521969430.png",
            ],
            [
                "name"=>"Home Automation",
                "slug"=>"home-automation",
                "image"=>"1521969454.png",
            ],
            [
                "name"=>"Geyser",
                "slug"=>"geyser",
                "image"=>"1521969558.png",
            ],
            [
                "name"=>"TV Repair",
                "slug"=>"tv repair",
                "image"=>"1521969522.png",
            ],
            [
                "name"=>"Laptop Repair",
                "slug"=>"laptop repair",
                "image"=>"1521969512.png",
            ],
            [
                "name"=>"Washing Machine Repair",
                "slug"=>"washing Machine repair",
                "image"=>"1521972663.png",
            ],
        ]);
    }
}
