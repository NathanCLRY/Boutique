<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => random_int(1, 3),
            'name' => fake()->word(),
            'brand' => fake()->company(),
            'description' => fake()->realText(200, 2),
            'price' => fake()->randomFloat(),
            'image' => fake()->imageUrl(640, 480, 'arcade stick', true),
        ];
    }
}
