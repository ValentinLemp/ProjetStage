<?php

namespace Database\Seeders;

use App\Models\statut;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Statut::factory()->create([
            'label' => 'nouvelle',
        ]);
        Statut::factory()->create([
            'label' => 'en cours',
        ]);
        Statut::factory()->create([
            'label' => 'terminé',
        ]);
    }
}
