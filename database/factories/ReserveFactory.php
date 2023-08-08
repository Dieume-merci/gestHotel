<?php

namespace Database\Factories;

use App\Models\Categorie;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reserve>
 */
class ReserveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "categorie_id"=>Categorie::factory(),
            "client_id"=>Client::factory(),
            "quantite"=>$this->faker->randomDigit(),
            "quantite_totale"=>$this->faker->randomDigit(),
            "quantite_totale_generale"=>$this->faker->randomDigit()
        ];
    }
}
