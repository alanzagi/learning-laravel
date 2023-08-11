<?php

namespace Database\Factories;

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
        return [
            'title' => fake()->sentence(3),
            'slug' => fake()->slug(),
            'excerpt' => fake()->paragraph(1),
            'body' => fake()->paragraphs(3, 10),
            'user_id' => mt_rand(1, 5),
            'category_id' => mt_rand(1, 2)
        ];
    }
}
