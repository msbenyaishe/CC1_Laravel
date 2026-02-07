<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Expert;

class ExpertSeeder extends Seeder
{
    public function run(): void
    {
        Expert::create([
            'nomExp' => 'Benyaiche',
            'prenomExp' => 'Mohamed Said',
            'telExp' => '0627957919',
            'specialiteExp' => 'Informatique',
            'emailExp' => 'mohamedsaidbenyaiche@gmail.com',
        ]);

        Expert::create([
            'nomExp' => 'Martin',
            'prenomExp' => 'Sara',
            'telExp' => '0623456789',
            'specialiteExp' => 'Cybersecurité',
            'emailExp' => 'sara.martin@gmail.com',
        ]);
    }
}
