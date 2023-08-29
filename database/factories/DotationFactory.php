<?php

namespace Database\Factories;

use App\Models\Agent;
use App\Models\Entreprise;
use App\Models\Reserve;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dotation>
 */
class DotationFactory extends Factory
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
            "entreprise_id"=>Entreprise::factory(),
            "reserve_id"=>Reserve::factory(),
            "user_id"=>User::factory(),
            "quantite"=>$this->faker->randomDigit()
        ];
    }
}
