<?php

namespace Database\Seeders;

use App\Models\Quartier;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuartierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quartier::create(['libelle_quartier' => 'Plateau', 'id_region' => 1]);
        Quartier::create(['libelle_quartier' => 'Mermoz', 'id_region' => 1]);
        Quartier::create(['libelle_quartier' => 'Sacree Coeur', 'id_region' => 1]);
        Quartier::create(['libelle_quartier' => 'Almadies', 'id_region' => 1]);
        Quartier::create(['libelle_quartier' => 'Yoff', 'id_region' => 1]);
        Quartier::create(['libelle_quartier' => 'Hersent', 'id_region' => 2]);
        Quartier::create(['libelle_quartier' => 'Grand Standing', 'id_region' => 2]);
        Quartier::create(['libelle_quartier' => 'Mbour 3', 'id_region' => 2]);
        Quartier::create(['libelle_quartier' => 'Thialy', 'id_region' => 2]);
        Quartier::create(['libelle_quartier' => 'Cite Senghor', 'id_region' => 2]);
    }
}
