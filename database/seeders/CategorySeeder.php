<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'category_names' => 'Web Development',
            'slug' => 'web-development',
            'color' => 'red'
        ]);
        Category::create([
            'category_names' => 'IT Support',
            'slug' => 'it-support',
            'color' => 'green'
        ]);
        Category::create([
            'category_names' => 'Desain Programmer',
            'slug' => 'desain-programmer',
            'color' => 'blue'
        ]);
        Category::create([
            'category_names' => 'CSS',
            'slug' => 'css',
            'color' => 'yellow'
        ]);
        Category::create([
            'category_names' => 'Aplication Mobile',
            'slug' => 'aplication-mobile',
            'color' => 'purple'
        ]);
    }
}
