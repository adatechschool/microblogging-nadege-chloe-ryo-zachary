<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    //Indique à Laravel quelle classe de quel modèle sera associée à cette factory.
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //génère une phrase aléatoire pour le titre du post
            'title' => $this->faker->sentence,
            //génère un paragraphe aléatoire pour le contenu du post
            'content' => $this->faker->paragraph,
            //Créer un user (create) et utiliser son id et l'attribuer à chaque faux post généré
            'user_id' => User::factory()->create()->id,
        ];
    }
}
