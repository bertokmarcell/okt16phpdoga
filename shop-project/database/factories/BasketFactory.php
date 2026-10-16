<?php

namespace Database\Factories;

use App\Models\basket;
use App\Models\product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<basket>
 */
class BasketFactory extends Factory
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
            'product_id'=>product::all()->random(),
            'user_id'=>User::all()->random()
        ];
    }
}
