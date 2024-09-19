<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('houses')->insert([
            [
                'name'=>'АСТ',
                'city'=>'Москва'
            ],
            [
                'name'=>'Бонни',
                'city'=>'Санкт-Петербург'
            ]
        ]);
    }
}
