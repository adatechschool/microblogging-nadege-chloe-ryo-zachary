<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => $this->faker->sentence(5), // Génère un titre aléatoire
            'slug' => $this->faker->slug(), // Génère un slug aléatoire
            'contenu' => $this->faker->text(), // Génère du contenu aléatoire
            'user_id' => User::inRandomOrder()->first()->id, // Sélectionne un utilisateur existant de manière aléatoire
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'), // Génère une date aléatoire
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'), // Génère une date aléatoire
        ];


    }
}
