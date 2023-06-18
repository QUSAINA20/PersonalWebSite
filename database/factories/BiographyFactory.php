<?php

namespace Database\Factories;

use App\Models\Biography;
use Illuminate\Database\Eloquent\Factories\Factory;

class BiographyFactory extends Factory
{
    protected $model = Biography::class;

    public function definition()
    {
        $body = $this->faker->text(200);
        return [
            'body' => $body,
        ];
    }
}
