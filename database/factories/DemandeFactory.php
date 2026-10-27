<?php

namespace Database\Factories;

use App\Models\Demande;
use App\Models\statut;
use App\Models\user;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Demande>
 */
class DemandeFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'description' => fake()->text(),
            'user_id' => fake()->numberBetween(1, 10),
            'statut_id' => fake()->numberBetween(1, 3),
            'dueDate' => fake()->dateTimeBetween('-1 months', '+1 months'),
        ];
    }
}
