<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entreprise>
 */
class EntrepriseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "designation"=>$this->faker->company,
            "contact"=>$this->faker->phoneNumber(),
            "email"=>$this->faker->safeEmailDomain,
            "sigle"=>$this->faker->companySuffix,
        ];
    }
}
