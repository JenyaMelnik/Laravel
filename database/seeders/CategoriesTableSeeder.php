<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Мобильные телефоны',
                'code' => 'mobiles',
                'description' => 'Описание мольных телефонов'
            ],
            [
                'name' => 'Портативная техника',
                'code' => 'portable', 'description' =>
                'Описание портативной техники'
            ],
            [
                'name' => 'Бытовая техника',
                'code' => 'technics',
                'description' => 'Описание бытовой техники'
            ],
        ]);
    }
}
