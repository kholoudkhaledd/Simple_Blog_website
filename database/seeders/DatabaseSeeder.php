<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
     public function run()
    {
        // Create 10 users, each with 5 posts
        \App\Models\User::factory(10)
            ->has(\App\Models\Post::factory()->count(5))
            ->create();

        // If you have categories, tags, or comments, seed them here as well
        // \App\Models\Category::factory(5)->create();
        // \App\Models\Comment::factory(20)->create();
    }
}
