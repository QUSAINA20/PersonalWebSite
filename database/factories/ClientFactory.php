<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name;

        return [
            'name' => $name,
        ];
    }
    public function configure()
    {
        return $this->afterCreating(function (Client $client) {
            $image = $this->faker->image();
            $client
                ->addMedia($image)
                ->preservingOriginal()
                ->toMediaCollection('images');
            Storage::delete($image);
        });
    }
}
