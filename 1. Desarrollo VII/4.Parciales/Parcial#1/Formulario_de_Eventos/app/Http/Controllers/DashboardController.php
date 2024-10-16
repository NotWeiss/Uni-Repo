<?php

namespace App\Http\Controllers;

use App\Models\Inscriptor;
use App\Models\Pais;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        // Get all inscriptos with the area relationship
        $inscritos = Inscriptor::with('area', 'paisResidencia', 'paisNacion')->get();

    //dd($inscritos);

    return view('dashboard', ['inscritos' => $inscritos]);
    }
}
