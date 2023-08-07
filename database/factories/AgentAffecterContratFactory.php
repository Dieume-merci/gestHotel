<?php

namespace Database\Factories;

use App\Models\Agent;
use App\Models\Contrat;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AgentAffecterContrat>
 */
class AgentAffecterContratFactory extends Factory
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
            "contrat_id"=>Contrat::factory(),
        ];
    }
}
