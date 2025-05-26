<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\PostComment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PostCommentFactory extends Factory
{
    protected $model = PostComment::class;

    public function definition(): array
    {
        return [
            'content' => $this->faker->text(200),
            'created_at' => $this->faker->dateTimeThisYear(),
            'updated_at' => Carbon::now(),

            'post_id' => $this->faker->randomElement(Post::pluck('id')),
        ];
    }
}
