<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Services;
use App\Models\ServiceComplement;

class ServiceComplementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service = Services::find(1);
        $array =  [
            ['service_id' => $service->id, 'icon' => 'fas fa-desktop', 'text' => 'Site Institucional'],
            ['service_id' => $service->id, 'icon' => 'fas fa-store-alt', 'text' => 'E-commerce'],
            ['service_id' => $service->id, 'icon' => 'fas fa-tachometer-alt', 'text' => 'Sistema Personalizado']
        ];

        foreach ($array as $value) {
            ServiceComplement::create($value);
        }
    }
}
