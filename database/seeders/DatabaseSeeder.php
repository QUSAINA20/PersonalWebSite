<?php

namespace Database\Seeders;

use App\Models\Achievement;
use App\Models\Biography;
use App\Models\Portfolio;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Experience;


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
        Achievement::factory(5)->create();
        Experience::factory(7)->create();
        $this->call(BiographySeeder::class);
        $this->call(SpecializationSeeder::class);
    }
}
