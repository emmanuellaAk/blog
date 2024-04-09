<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
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
        Category::factory(5)->create();
        
        for($i = 0 ; $i< 5 ;$i++){
            $user = User::factory()->create();

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);
        }
    }
}
