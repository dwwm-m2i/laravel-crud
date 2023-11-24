<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(),
            'slug' => fake()->slug(),
            'content' => fake()->text(),
            'image' => fake()->imageUrl(),
            'active' => fake()->boolean(),
            'company' => fake()->company(),
            'genres' => fake()->randomElements(['Aventure', 'Action', 'MMO', 'RPG'], null),
            'released_at' => fake()->dateTimeBetween('-30 years', '+10 years'),
        ];
    }
}
