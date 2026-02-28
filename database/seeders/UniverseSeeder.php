<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Universe;

class UniverseSeeder extends Seeder
{
    public function run()
    {
        $universes = [
            [
                'name' => 'Marvel',
                'company' => 'Marvel Studios',
                'age' => 84
            ],
            [
                'name' => 'DC',
                'company' => 'DC Comics',
                'age' => 89
            ],
            [
                'name' => 'Dark Horse',
                'company' => 'Dark Horse Comics',
                'age' => 37
            ],
            [
                'name' => 'Image Comics',
                'company' => 'Image Comics',
                'age' => 31
            ],
        ];

        foreach ($universes as $universe) {
            Universe::create($universe);
        }
    }
}