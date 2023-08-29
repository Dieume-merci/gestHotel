<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Entreprise;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categorie>
 */
class CategorieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "designation"=>$this->faker->streetName,
            "entreprise_id"=>Entreprise::factory(),
            "user_id"=>User::factory(),
            "unite"=>$this->faker->countryCode,
        ];
    }
}
