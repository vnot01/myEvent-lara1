<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('config_apps')->insert([
            [
            'app_name'=>config('app.name'),
            'description'=>'Festava Live is free CSS template provided by TemplateMo website. This layout is built on Bootstrap v5.2.2 CSS library. You are free to use this template for your commercial website.
            Once in Lifetime Experience.
            You are not allowed to redistribute the template ZIP file on any other website without a permission.
            Whole Night Party
            Please tell your friends about our website. Thank you.',
            'is_active'=>true,
            ],
        ]);
    }
}