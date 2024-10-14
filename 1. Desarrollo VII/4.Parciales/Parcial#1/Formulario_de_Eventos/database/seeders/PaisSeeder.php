<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Pais;
use Illuminate\Support\Facades\Http;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtiene todos los paises existentes de una API
        $respuesta = Http::timeout(90)->get('https://restcountries.com/v3.1/all');

        if ($respuesta->successful())
            $paises = $respuesta->json();


        // Organiza los paises en orden alfabetico
        usort($paises, function ($a, $b) 
        {
            return strcmp($a['name']['common'], $b['name']['common']);
        });


        // Crea registros de paises
        foreach ($paises as $pais)
        {
            $nombre = $pais['name']['common'];

            if (isset($pais['demonyms']['spa'])) 
                $demonimo = $pais['demonyms']['spa']['f'];

            elseif (isset($pais['demonyms']['eng']))
                $demonimo = $pais['demonyms']['eng']['f'];

            else
                $demonimo = $nombre;

            Pais::create([
                'nombre' => $nombre,
                'demonimo' => $demonimo
            ]);
        }
    }
}
