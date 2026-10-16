<?php

namespace Database\Factories;

use App\Models\product;
use App\Models\types;
use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Type;

/**
 * @extends Factory<product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'time' => now(),
            'type_id'=>types::all(),
            'name'=> fake()->colorName(),
            'description'=>fake()->sentence(),
            'price'=>random_int(200,70000)

            ];
    }
}
