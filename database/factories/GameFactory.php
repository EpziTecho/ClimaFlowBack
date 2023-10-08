<?php

namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(){
        return [
            'player_id' => Player::factory(),
            'scrap_amount' => $this->faker->numberBetween(0, 10000),
            'water_amount' => $this->faker->numberBetween(0, 5000),
            'water_container_amount' => $this->faker->numberBetween(0, 10),

        ];
    }
}
