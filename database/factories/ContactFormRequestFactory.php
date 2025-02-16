<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class ContactFormRequestFactory
 * @package Database\Factories
 */
class ContactFormRequestFactory extends Factory
{
    /**
     * @return array|mixed[]
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName,
            'last_name'  => fake()->lastName,
            'phone'      => fake()->phoneNumber,
            'email'      => fake()->safeEmail(),
            'company'    => fake()->company,
            'role'       => fake()->word,
            'consent'    => fake()->boolean,
            'message'    => fake()->sentence,
        ];
    }
}
