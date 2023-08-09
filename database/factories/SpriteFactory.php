<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sprite>
 */
class SpriteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users = User::all();

        $width = rand(1, 128);
        $height = rand(1, 128);
        return [
            "name" => fake()->sentence(2),
            "width" => $width,
            "height" => $height,
            "data" => str_pad("", 4 * $width * $height, chr(0)),
            "user_id" => $users->random()->first()->id,
            "created_at" => fake()->dateTimeBetween("-1 day", "now"),
            "updated_at" => fake()->dateTimeBetween("-1 day", "now")
        ];
    }
}
