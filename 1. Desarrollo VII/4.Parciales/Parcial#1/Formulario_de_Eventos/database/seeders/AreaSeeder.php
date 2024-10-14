<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Area;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $opciones = ['Redes', 'Programación', 'I.A.', 'Animacion 3D'];

        foreach ($opciones as $opcion)
        {
            Area::create([
                'opcion' => $opcion
            ]);
        }
        
    }
}
