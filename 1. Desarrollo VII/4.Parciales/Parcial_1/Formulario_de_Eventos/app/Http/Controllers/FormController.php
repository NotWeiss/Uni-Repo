<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;
use App\Models\Area;
use App\Models\Inscriptor;

class FormController extends Controller
{
    // Carga la informacion del formulario
    public function formulario()
    {
        $paises = Pais::all();
        $opciones = Area::all();

        return view('formulario', [
            'paises' => $paises, 
            'opciones' => $opciones
        ]);
    }

    // Crea un nuevo registro en la tabla Inscriptor
    public function respuesta(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required', 
            'apellido' => 'required',
            'edad' => 'required|integer|gt:8', 
            'sexo' => 'required', 
            'residencia' => 'required|exists:datos_de_pais,pais_id',
            'nacionalidad' => 'required|exists:datos_de_pais,pais_id', 
            'telefono' => 'required', 
            'correo' => 'required|email', 
            'tema' => 'required|array'], 
            $this->mensajes());

        $data['nombre'] = ucfirst(strtolower($data['nombre']));
        $data['apellido'] = ucfirst(strtolower($data['apellido']));

        $inscriptor = Inscriptor::create($data);
        $inscriptor->area()->attach($data['tema']);

        return redirect()->route('formulario');
    }

    public function mensajes()
    {
        return[
            // Nombre
            'nombre.required' => 
                'Debe Ingresar su Nombre',

            // Apellido
            'apellido.required' => 
                'Debe Ingresar su Apellido',

            // Edad
            'edad.required' => 
                'Debe Ingresar su Edad.',

            'edad.integer' => 
                'El dato debe ser un número entero.',

            'edad.gt' => 
                'El dato debe ser un numero positivo mayor a 8.',

            // Sexo
            'sexo.required' => 
                'Debe Seleccionar su Sexo',

            // Pais de Residencia
            'residencia.required' => 
                'Debe Seleccionar su Pais de Residencia',

            // Nacionalidad
            'nacionalidad.required' => 
                'Debe Seleccionar su Nacionalidad',

            // Teléfono
            'telefono.required' => 
                'Debe Ingresar su Numero de Telefono.',

            // Correo
            'correo.required' => 
                'Debe Ingresar su Correo Electronico.',
                
            'correo.email' => 
                'El dato debe ser un Correo Electronico',

            // Tema de interés
            'tema.required' => 
                'Debe Seleccionar los Temas que le Interesan',
        ];
    }
}
