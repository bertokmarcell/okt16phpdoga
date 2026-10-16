<?php

namespace Database\Seeders;

use App\Models\basket;
use App\Models\product;
use App\Models\types;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Nette\Utils\Type;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        basket::factory(10)->create();
        product::factory(10)->create();
        types::factory(10)->create();


        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        User::factory()->create([
            'name' => 'Test User55555',
            'email' => 'test@example.com',
        ]);
        product::factory()->create([
            'name' => '2020-10-10',
            'description'=>'sdf',
            'price'=>'500'
        ]);
        Basket::factory()->create([
            'name' => '2020-10-10',
            'description'=>'sdf',
            'price'=>'500'
        ]);
        types::factory()->create([
            'name' => '2020-10-10',
            'description'=>'sdf',
            'price'=>'500'
        ]);
    }
}
