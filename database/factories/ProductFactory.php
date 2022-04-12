<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'reference' => $this->faker->word(),
            'price' => $this->faker->numberBetween(200,10000),
            'weight' => $this->faker->numberBetween(10,200),
            'category' => $this->faker->word(),
            'stock' => $this->faker->numberBetween(0,100),
        ];
    }
}
