<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Superpower;
use App\Models\Superhero;

class SuperpowerSeeder extends Seeder
{
    public function run()
    {
        // Obtener todos los héroes
        $spiderMan = Superhero::where('name', 'Spider-Man')->first();
        $ironMan = Superhero::where('name', 'Iron Man')->first();
        $captainMarvel = Superhero::where('name', 'Captain Marvel')->first();
        $batman = Superhero::where('name', 'Batman')->first();
        $wonderWoman = Superhero::where('name', 'Wonder Woman')->first();
        $superman = Superhero::where('name', 'Superman')->first();
        $hellboy = Superhero::where('name', 'Hellboy')->first();
        $invincible = Superhero::where('name', 'Invincible')->first();
        $spawn = Superhero::where('name', 'Spawn')->first();

        // Nota: Como no tienes tabla pivote, estos son poderes generales
        // Si quieres asignarlos a héroes específicos, necesitarías una tabla intermedia
        $superpowers = [
            [
                'name' => 'Super Strength',
                'description' => 'Ability to lift extremely heavy objects'
            ],
            [
                'name' => 'Flight',
                'description' => 'Ability to fly through the air'
            ],
            [
                'name' => 'Web-Slinging',
                'description' => 'Shoot webs from wrists'
            ],
            [
                'name' => 'Spider-Sense',
                'description' => 'Precognitive danger sensing'
            ],
            [
                'name' => 'Genius Intelligence',
                'description' => 'Extremely high IQ and problem-solving'
            ],
            [
                'name' => 'Energy Projection',
                'description' => 'Blast energy from hands'
            ],
            [
                'name' => 'Martial Arts',
                'description' => 'Expert hand-to-hand combat'
            ],
            [
                'name' => 'Invulnerability',
                'description' => 'Resistant to physical damage'
            ],
            [
                'name' => 'Regeneration',
                'description' => 'Heal rapidly from injuries'
            ],
            [
                'name' => 'Magic',
                'description' => 'Cast spells and use mystical powers'
            ],
        ];

        foreach ($superpowers as $power) {
            Superpower::create($power);
        }
    }
}