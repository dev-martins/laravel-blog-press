<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->title(),
            'type' => $this->faker->paragraph(),
            'size' => $this->faker->paragraph(),
            'dimensions' => $this->faker->paragraph(),
            'alt_text' => $this->faker->paragraph(),
            'title' => $this->faker->paragraph(),
            'subtitle' => $this->faker->paragraph(),
            'description' => $this->faker->paragraph(),
            'url' => $this->faker->paragraph(),
            'user_id' => User::factory(),
        ];
    }
}
