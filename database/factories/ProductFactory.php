<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'article' => $this->faker->unique()->word(),
            'name' => $this->faker->name(),
            'status' => $this->faker->randomElement($array = ['available', 'unavailable']),
            'properties' => [
                'color' => $this->faker->colorName(),
                'size' => $this->faker->randomElement(['XS', 'S', 'M', 'L', 'XL']),
            ],
        ];
    }
}
