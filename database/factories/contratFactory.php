<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Entreprise;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\contrat>
 */
class ContratFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "client_id"=>Client::factory(),
            "entreprise_id"=>Entreprise::factory(),
            "cout"=>$this->faker->randomDigit(),
            "contexte"=>$this->faker->randomElement,
            "date_debut"=>$this->faker->date,
            "date_fin"=>$this->faker->date()
        ];
    }
}
