<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User as AppUser;
use App\Models\Video;
use App\Models\Photo;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
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
            'user_id'=> AppUser::all()->random()->id,
            'commentable_id' => fake()->randomElement([
                Video::all()->random()->id,
                Photo::all()->random()->id,
            ]),
            'commentable_type' => fake()->randomElement([
                Video::class,
                Photo::class
            ]),
        ];
    }
}
