<?php

namespace Database\Factories;

use App\Models\Biography;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class BiographyFactory extends Factory
{
    protected $model = Biography::class;

    public function definition()
    {
        $body = '<p>My name is<strong> Alaa Darwish</strong>, 28 years old, from Syria - Aleppo. I started my career as a Photographer since I was 11 years old, after that I started learning about Photoshop, Retouching and BoOm........&nbsp;</p><p>Suddenly I realized there is such an amazing world called Graphic design.&nbsp;</p><p>In 2011 beacuse of war in Syria, I deside to move out with a lot of hope inside me, and with the many proffesionals and free resources I dicoverd&nbsp;</p><p>that I can become whatever I want to be, But first I need to learn everything and At that point, my journey began to draw my own Roadmap and learn every thing related like Branding, Logos design, Marketing, Ui/Ux design, after I started with Apps and Web designes I become to learn how to code. working hard, a lot of studyes, training centers, Universities, off/online courses</p>';
        return [
            'body' => $body,
        ];
    }
    public function configure()
    {
        return $this->afterCreating(function (Biography $biography) {
            $image = $this->faker->image();
            $biography
                ->addMedia($image)
                ->preservingOriginal()
                ->toMediaCollection('images');
            Storage::delete($image);
        });
    }
}
