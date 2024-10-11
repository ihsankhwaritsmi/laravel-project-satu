<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();

        Category::create([
            'name'=>'Web Design',
            'slug'=>'web-design',
            'color'=>'red'
        ]);


        Category::create([
            'name'=>'UI Design',
            'slug'=>'ui-design',
            'color'=>'blue'
            
        ]);

        Category::create([
            'name'=>'Machine Learning',
            'slug'=>'machine-learning',
            'color'=>'green'
        ]);

        Category::create([
            'name'=>'Data Science',
            'slug'=>'data-science',
            'color'=>'yellow'
        ]);

    }
}
