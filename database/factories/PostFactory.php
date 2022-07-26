<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> fake()->title(),
            'date' => fake()->date(),
            'content' => fake()->text(2000),
            'user_id'=> fake()->randomNumber()
        ];
    }
}