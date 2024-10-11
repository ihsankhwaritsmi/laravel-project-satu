<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // Category::create([
        //     'name'=>'Web Design',
        //     'slug'=>'web-design'
        // ]);

        // Post::create([
        //     'title'=>'My First Post',
        //     'slug'=>'my-first-post',
        //     'author_id'=>1,
        //     'category_id'=>1,
        //     'body'=>'Hello World'
        // ]);

        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
        ]);

        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}
