<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class ContactFormRoleFactory
 * @package Database\Factories
 */
class ContactFormRoleFactory extends Factory
{
    /**
     * @return array|mixed[]
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
        ];
    }
}
