<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PetOwnerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\PetOwner::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => fake()->unique()->firstName(),
            'lastname' => fake()->unique()->lastName(),
            'contact_num' => fake()->unique()->phoneNumber(),
            // 'user_id' => fake()->numberBetween(1, 30),
            // 'address_id' => fake()->numberBetween(1, 10), // Change this to the appropriate range
        ];
    }
}
