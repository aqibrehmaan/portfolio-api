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
        return [
            'title' => $this->faker->sentence(6, true),
            'video' => '<iframe src="https://player.vimeo.com/video/10985679?h=7008dd1c79" width="640" height="480" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                <p><a href="https://vimeo.com/10985679">Cat</a> from <a href="https://vimeo.com/firebirdflame">Ian S</a> on <a href="https://vimeo.com">Vimeo</a>.</p>',
            'category_id' => $this->faker->numberBetween(1, 3)
        ];
    }
}
