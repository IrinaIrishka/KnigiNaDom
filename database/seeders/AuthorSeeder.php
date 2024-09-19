<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            [
                'name' => 'Достоевский <br>
               Фёдор Михайлович'
            ],
            [
                'name' => 'Пушкин <br>
                Александр Сергеевич'
            ],
            [
                'name' => 'Ахматова <br>
                Анна Андреевна'
            ],
            [
                'name' => 'Толстой <br>
                Лев Николаевич'
            ],
            [
                'name' => 'Булгаков <br>
                Михаил Афанасьевич'
            ],
            [
                'name' => 'Гоголь <br>
                Николай Васильевич'
            ]
        ]);
    }
}
