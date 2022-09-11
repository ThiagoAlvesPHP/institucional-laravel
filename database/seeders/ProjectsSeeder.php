<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Projects;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            ['name' => 'Alemão Flores', 'image' => 'alemaoflores.png'],
            ['name' => 'A Sua Sala', 'image' => 'asuasala.png'],
            ['name' => 'Blueseeds', 'image' => 'blueseeds.png'],
            ['name' => 'Callnet', 'image' => 'callnet.png'],
            ['name' => 'Conexão Ativa', 'image' => 'conexaoativa.png'],
            ['name' => 'Madcity', 'image' => 'madcity.png'],
            ['name' => 'Mega Reguladora', 'image' => 'mega.png'],
            ['name' => 'MercatApp', 'image' => 'mercatapp.png'],
            ['name' => 'Paiol das Flores', 'image' => 'paiol.png'],
            ['name' => 'Verde Rosa Flores', 'image' => 'verderosa.png'],
        ];

        foreach ($array as $value) {
            Projects::create($value);
        }
    }
}
