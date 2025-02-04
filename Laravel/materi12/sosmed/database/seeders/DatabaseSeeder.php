<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Video;
use App\Models\Photo;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Profile;
use App\Models\Role;
use App\Models\UserRole;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Ensure that the factory methods are correctly generating arrays of data
        User::factory()->count(100)->create();
        Role::factory()->count(10)->create(); // Adjusted count to 10
        UserRole::factory()->count(10)->create();
        Profile::factory()->count(100)->create();
        Video::factory()->count(10)->create();
        Photo::factory()->count(10)->create();
        Comment::factory()->count(10)->create();
        Post::factory()->count(10)->create();
    }
}
