<?php

namespace App\Http\Controllers;

use App\Models\Inscriptor;

class DashboardController extends Controller
{
    // Carga la vista del Dashboard
    public function dashboard()
    {
        // Get all inscriptos with the area relationship
        $inscritos = Inscriptor::with('area', 'paisResidencia', 'paisNacion')->get();

        return view('dashboard', ['inscritos' => $inscritos]);
    }
}
