<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GeneralFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'website_title' => 'My Portfolio Website',
            'logo_image' => 'NULL'
        ];
    }
}
