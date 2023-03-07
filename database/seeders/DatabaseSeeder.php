<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       /*  User::factory(10)->create(); */

        User::factory()->create([
             'name' => 'Coders',
             'email' => 'coders@arrabalempleo.org',
         ]);

        Category::create([
            'name' => 'Apoyo a Programas',
        ]);
        Category::create([
            'name' => 'Informatica',
        ]);
        Category::create([
            'name' => 'Limpieza',
        ]);
        Category::create([
            'name' => 'Mantenimiento',
        ]);
        Category::create([
            'name' => 'Materiales',
        ]);
        
    }
}
