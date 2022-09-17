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
            ['service_id' => $service->id, 'image' => '<i class="fas fa-desktop"></i>', 'text' => 'Site Institucional'],
            ['service_id' => $service->id, 'image' => '<i class="fas fa-store-alt"></i>', 'text' => 'E-commerce'],
            ['service_id' => $service->id, 'image' => '<i class="fas fa-tachometer-alt"></i>', 'text' => 'Sistema Personalizado']
        ];

        foreach ($array as $value) {
            ServiceComplement::create($value);
        }
    }
}
