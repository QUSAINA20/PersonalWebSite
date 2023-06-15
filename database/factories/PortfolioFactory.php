<?php

namespace Database\Factories;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portfolio>
 */
class PortfolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name;
        $section = $this->faker->randomElement(['brand-identity', 'social-media', 'ui-ux-design', 'photos']);
        $link = $this->faker->url;
        return [
            'name' => $name,
            'section' => $section,
            'link' => $link,
        ];
    }
    public function configure()
    {
        return $this->afterCreating(function (Portfolio $portfolio) {
            $image = $this->faker->image();
            $portfolio
                ->addMedia($image)
                ->preservingOriginal()
                ->toMediaCollection('images');
            Storage::delete($image);
        });
    }
}
