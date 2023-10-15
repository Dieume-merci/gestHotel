<?php

namespace Database\Factories;

use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\contrat>
 */
class EspaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "type_id"=>Type::factory(),
            "user_id"=>User::factory(),
            "cout"=>$this->faker->randomDigit(),
            "designation"=>$this->faker->randomElement,
            "description"=>$this->faker->text,
        ];
    }
}