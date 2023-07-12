<?php

namespace Database\Seeders;

use App\Models\Tecnology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TecnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tecnologies = ['bootstrap', 'laravel', 'vue', 'vite'];

        foreach($tecnologies as $tecnology){
            $newTecnology = new Tecnology();
            $newTecnology->name = $tecnology;
            $newTecnology->save();

        }

    }
}
