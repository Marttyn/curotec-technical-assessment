<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\PostComment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'content' => $this->faker->text(500),
            'author' => $this->faker->word(),
            'created_at' => $this->faker->dateTimeThisYear(),
            'updated_at' => Carbon::now(),
        ];
    }

    public function configure(): static
    {
        return $this->afterCreating(function (Post $post) {
            PostComment::factory()->count(rand(5, 30))->for($post)->create();
        });
    }
}
