<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $videos = ['648802095', '648847915'];
        $titles = ['“A Good Plot” - Trailer', '“Cult Followers” - Trailer'];

        return [
            'title' => $titles[$this->faker->numberBetween(0, 1)],
            'video' => $videos[$this->faker->numberBetween(0, 1)],
            'description' => $this->faker->paragraph(10,true),
            'category_id' => $this->faker->numberBetween(1, 3)
        ];
    }
}
