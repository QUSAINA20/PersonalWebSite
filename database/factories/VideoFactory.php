<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name;
        $section = $this->faker->randomElement(['adobe-photoshop', 'adobe-illustrator', 'after-effect', 'adobe-xd']);
        $link = $this->faker->url;
        return [
            'name' => $name,
            'section' => $section,
            'link' => $link,
        ];
    }
}
