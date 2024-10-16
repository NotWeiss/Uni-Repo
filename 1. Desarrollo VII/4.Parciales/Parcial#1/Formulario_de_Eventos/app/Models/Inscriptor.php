<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscriptor extends Model
{
    use HasFactory;

    protected $table = 'datos_de_inscriptor';
    protected $primaryKey = 'inscriptor_id';
    public $timestamps = false;

    protected $fillable = [
        'nombre', 
        'apellido', 
        'edad', 
        'sexo', 
        'residencia',        // Ensure this is the foreign key id
        'nacionalidad',      // Ensure this is the foreign key id
        'telefono', 
        'correo'
    ];

    // Relationship with the Pais table for residencia
    public function paisResidencia()
    {
        return $this->belongsTo(Pais::class, 'residencia');
    }

    // Relationship with the Pais table for nacionalidad
    public function paisNacion()
    {
        return $this->belongsTo(Pais::class, 'nacionalidad');
    }

    // Relationship with the Area table for areas of interest
    public function area()
    {
        return $this->belongsToMany(Area::class, 'interes', 'inscriptor_id', 'area_id');
    }
}