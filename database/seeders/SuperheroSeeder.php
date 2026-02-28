<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Superhero;
use App\Models\Universe;

class SuperheroSeeder extends Seeder
{
    public function run()
    {
        // Obtener IDs de universos
        $marvel = Universe::where('name', 'Marvel')->first();
        $dc = Universe::where('name', 'DC')->first();
        $darkHorse = Universe::where('name', 'Dark Horse')->first();
        $image = Universe::where('name', 'Image Comics')->first();

        $superheroes = [
            // Marvel
            [
                'name' => 'Spider-Man',
                'real_name' => 'Peter Parker',
                'gender' => 'Male',
                'universe_id' => $marvel->id
            ],
            [
                'name' => 'Iron Man',
                'real_name' => 'Tony Stark',
                'gender' => 'Male',
                'universe_id' => $marvel->id
            ],
            [
                'name' => 'Captain Marvel',
                'real_name' => 'Carol Danvers',
                'gender' => 'Female',
                'universe_id' => $marvel->id
            ],
            // DC
            [
                'name' => 'Batman',
                'real_name' => 'Bruce Wayne',
                'gender' => 'Male',
                'universe_id' => $dc->id
            ],
            [
                'name' => 'Wonder Woman',
                'real_name' => 'Diana Prince',
                'gender' => 'Female',
                'universe_id' => $dc->id
            ],
            [
                'name' => 'Superman',
                'real_name' => 'Clark Kent',
                'gender' => 'Male',
                'universe_id' => $dc->id
            ],
            // Dark Horse
            [
                'name' => 'Hellboy',
                'real_name' => 'Anung Un Rama',
                'gender' => 'Male',
                'universe_id' => $darkHorse->id
            ],
            // Image Comics
            [
                'name' => 'Invincible',
                'real_name' => 'Mark Grayson',
                'gender' => 'Male',
                'universe_id' => $image->id
            ],
            [
                'name' => 'Spawn',
                'real_name' => 'Al Simmons',
                'gender' => 'Male',
                'universe_id' => $image->id
            ],
        ];

        foreach ($superheroes as $hero) {
            Superhero::create($hero);
        }
    }
}