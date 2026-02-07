<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Evenement;

class EvenementSeeder extends Seeder
{
    public function run(): void
    {
        Evenement::create([
            'theme' => 'Conférence Informatique Avancée',
            'date_debut' => '2024-04-01',
            'date_fin' => '2024-04-03',
            'description' => 'Conférence sur les dernières avancées en informatique',
            'cout_journalier' => 500,
            'expert_id' => 1,
        ]);

        Evenement::create([
            'theme' => 'Sécurité Informatique',
            'date_debut' => '2024-05-10',
            'date_fin' => '2024-05-12',
            'description' => 'Séminaire de cybersécurité',
            'cout_journalier' => 600,
            'expert_id' => 2,
        ]);
    }
}
