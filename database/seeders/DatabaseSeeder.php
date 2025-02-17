<?php

namespace Database\Seeders;

use App\Models\Comment;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Database\Seeders\CommentSeeder;
use Database\Seeders\UsersSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * 
     * User::factory()->create([
     * 'name' => 'Test User',
     * 'email' => 'test@example.com',
     * ]);
     * 
     * $this->call([
     * //UsersSeeder::class,
     * CommentSeeder::class,
     * ]);
     */
    public function run(): void
    {
        User::factory(10)->create();
        Comment::factory(12)->create();
    }
}
