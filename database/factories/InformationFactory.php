<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'info_head' => 'About Us',
            'info_description' => 'Northern California natives Ian Kibbey and Corey Creasey met while studying at the University of California, Berkeley. Since 2003 the two have worked together under the moniker Terri Timely to create short films, music videos and commercials with unique visual style. Early works like their music videos for artists Joanna Newsom, St. Vincent and Modest Mouse helped the team hone a style that continues to inform their work, drawing on offbeat humor to atypical narratives.',
            'info_image' => 'info/1639653268.jpg',
        ];
    }
}
