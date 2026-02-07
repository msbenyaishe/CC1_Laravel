<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Atelier;

class AtelierSeeder extends Seeder
{
    public function run(): void
    {
        Atelier::create([
            'nomAtelier' => 'Atelier Développement Web',
            'descriptionAtelier' => 'Pratique avancée des technologies web',
            'evenement_id' => 1,
        ]);

        Atelier::create([
            'nomAtelier' => 'Atelier Sécurité',
            'descriptionAtelier' => 'Séances pratiques pour renforcer la sécurité',
            'evenement_id' => 2,
        ]);
    }
}
