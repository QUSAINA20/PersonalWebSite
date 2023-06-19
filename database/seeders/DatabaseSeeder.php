<?php

namespace Database\Seeders;

use App\Models\Achievement;
use App\Models\Biography;
use App\Models\Client;
use App\Models\Portfolio;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Experience;
use App\Models\Video;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@material.com',
            'password' => ('secret')
        ]);
        Portfolio::factory(5)->create();
        Video::factory(5)->create();
        Achievement::factory(5)->create();
        Experience::factory(7)->create();
        Client::factory(7)->create();
        Biography::factory()->create();

        $this->call(SpecializationSeeder::class);
    }
}
