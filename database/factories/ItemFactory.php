<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->name(),
            'description' => fake()->unique()->paragraph(),
            'price' => fake()->randomFloat(2,1,999),
            'image_url' => 'qsdsfsfspqsfd.dede'
        ];
    }
}
