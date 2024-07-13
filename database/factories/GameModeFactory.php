<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GameMode>
 */
class GameModeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Title'     => fake()->jobTitle(),
            'Desciption'=> 'Le but du mode de jeux consiste a fini le jeux le plus vite possible',
            'Game_id'   => game::factory(),
        ];
    }
}
