<?php

namespace Database\Factories;

use App\Models\Entreprise;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Domaine>
 */
class DomaineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id"=>User::factory(),
            "entreprise_id"=>Entreprise::factory(),
            "designation"=>$this->faker->domainName
        ];
    }
}
