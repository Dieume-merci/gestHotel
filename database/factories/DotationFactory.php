<?php

namespace Database\Factories;

use App\Models\Agent;
use App\Models\Reserve;
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
            "reserve_id"=>Reserve::factory(),
            "quantite"=>$this->faker->randomDigit()
        ];
    }
}
