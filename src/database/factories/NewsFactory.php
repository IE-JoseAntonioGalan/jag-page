<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'thumbnail' => 'posts/'.$this->faker->image('storage/app/posts', 700, 700, null, false),
            'content' => $this->faker->text(300),
            'status' => $this->faker->randomElement(['published', 'eraser'])
        ];
    }
}
