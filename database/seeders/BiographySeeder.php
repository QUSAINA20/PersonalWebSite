<?php

namespace Database\Seeders;

use App\Models\Biography;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class BiographySeeder extends Seeder
{
    /**
     * @throws FileIsTooBig
     * @throws FileDoesNotExist
     */
    public function run()
    {
//        $file = File::get(storage_path('/app/public/alaa.png'));
//        $file = File::get(public_path('alaa.png'));
//        dd($file);
        $biography = new Biography();
        $biography['body'] = 'My name is Alaa Darwish, 28 years old, from Syria - Aleppo.
I started my career as a Photographer since I was 11 years old,
after that I started learning about Photoshop, Retouching and BoOm........
Suddenly I realized there is such an amazing world called Graphic design.
In 2011 beacuse of war in Syria, I deside to move out with a lot of hope
inside me, and with the many proffesionals and free resources I dicoverd
that I can become whatever I want to be, But first I need to learn everything and At that point, my journey began to draw my own Roadmap and learn every thing related like Branding, Logos design, Marketing, Ui/Ux design, after I started with Apps and Web designes I become to learn how to code. working hard, a lot of studyes, training centers, Universities, off/online courses';
        $biography->save();

//        // add the image
//        $biography->clearMediaCollection('images');
//        $biography->addMedia($file)->toMediaCollection('images');
    }
}
