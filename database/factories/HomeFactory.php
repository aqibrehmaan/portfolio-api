<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'before_name' => "Hi I'm",
            'name' => 'Victoria',
            'after_name' => 'Photographer',
            'description' => 'I design and code beautifully simple things, and I love  what I do. I use animation as a third dimension by which Lorem ipsum dolor sit amet consectetur adipisicing.',
            'fb_link' => 'https://www.facebook.com',
            'insta_link' => 'https://www.instagram.com',
            'linkedin_link' => 'https://www.linkedin.com',
            'twitter_link' => 'https://www.twitter.com'
        ];
    }
}
