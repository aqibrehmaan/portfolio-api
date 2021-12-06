<?php

namespace Database\Seeders;

use App\Models\Home;
use App\Models\Post;
use App\Models\User;
use App\Models\General;
use App\Models\Category;
use App\Models\Navigation;
use App\Models\Information;
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
        // User
        User::factory()->create();

        // Category
        Category::factory()->create([
            'name' => 'Short Films'
        ]);

        Category::factory()->create([
            'name' => 'Music Videos'
        ]);

        Category::factory()->create([
            'name' => 'Commercials'
        ]);

        // Post
        Post::factory(10)->create();

        // Navigation
        Navigation::factory()->create([
            'link' => '/',
            'name' => 'Home'
        ]);

        Navigation::factory()->create([
            'link' => 'work',
            'name' => 'Work'
        ]);

        Navigation::factory()->create([
            'link' => 'blog',
            'name' => 'Blog'
        ]);

        Navigation::factory()->create([
            'link' => 'info',
            'name' => 'Info'
        ]);

        Navigation::factory()->create([
            'link' => 'contact',
            'name' => 'Contact'
        ]);

        // General
        General::factory()->create();

        // HOME
        Home::factory()->create();

        // Information
        Information::factory()->create();
    }
}
