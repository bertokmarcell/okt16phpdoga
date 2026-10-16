<?php

namespace Database\Factories;

use App\Models\product;
use App\Models\types;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

use function Illuminate\Support\years;

/**
 * @extends Factory<types>
 */
class TypesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->userName(),
            'description'=>fake()->sentence()
            ];
    }
}
