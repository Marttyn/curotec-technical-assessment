<?php

namespace Database\Factories;

use App\Models\Post;
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
}
