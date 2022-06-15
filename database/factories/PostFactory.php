<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use App\Models\Visibility;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'text' => $this->faker->text(),
            'text' => $this->faker->slug(),
            'summary' => $this->faker->paragraph(),
            'comments' => Comment::factory(),
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'visibility_id' => Visibility::factory(),
        ];
    }
}
