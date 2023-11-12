<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Espace;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reserve>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "espace_id"=>Espace::factory(),
            "client_id"=>Client::factory(),
            "heure"=>$this->faker->randomDigit(),
            "date_reservee"=>$this->faker->date(),
            "date_fin"=>$this->faker->date(),
            "montant"=>$this->faker->randomDigit()
        ];
    }
}