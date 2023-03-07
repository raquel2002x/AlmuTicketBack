<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create(['name' =>'Remoto']);
        Category::create(['name' =>'Mantenimiento']);
        Category::create(['name' =>'Limpieza']);
        Category::create(['name' =>'Informatica']);
    }
}
