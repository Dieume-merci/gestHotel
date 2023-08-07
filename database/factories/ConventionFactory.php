<?php

namespace Database\Factories;

use App\Models\Agent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Convention>
 */
class ConventionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "agent_id"=>Agent::factory(),
            "date_debut"=>$this->faker->date,
            "date_fin"=>$this->faker->date,
            "salaire"=>$this->faker->randomFloat
        ];
    }
}
