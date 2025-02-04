<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Video;
use App\Models\Photo;
use App\Models\Comment;


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
            'body' => fake()->word(),
            'comment_id' => Comment::all()->random()->id,
            'postable_id' => fake()->randomElement([
                Video::all()->random()->id,
                Photo::all()->random()->id,
            ]),
            'postable_type' => fake()->randomElement([
                Video::class,
                Photo::Class,
            ]),
            'user_id'=> User::all()->random()->id,
        ];
    }
}
