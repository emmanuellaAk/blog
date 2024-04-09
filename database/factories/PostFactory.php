<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users = User::all();
        $categories = Category::all();
        return [
            'user_id' => $this->faker->randomElement($users),
            'category_id' => $this->faker->randomElement($categories),
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'excerpt' =>'<p>' . implode('</p><p>', $this->faker->paragraphs(2)) . '</p>',
            'body' =>'<p>' . implode('</p><p>', $this->faker->paragraphs(6)) . '</p>'
        ];
    }
}
