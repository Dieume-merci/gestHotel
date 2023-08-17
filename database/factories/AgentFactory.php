<?php

namespace Database\Factories;

use App\Models\Domaine;
use App\Models\Entreprise;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agent>
 */
class AgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "domaine_id"=>Domaine::factory(),
            "entreprise_id"=>Entreprise::factory(),
            "nom"=>$this->faker->lastName(),
            "postnom"=>$this->faker->firstName(),
            "prenom"=>$this->faker->userName,
            "civilite"=>$this->faker->word,
            "contact"=>$this->faker->e164PhoneNumber(),
            "fonction"=>$this->faker->jobTitle(),
            "email"=>$this->faker->safeEmail,
        ];
    }
}
