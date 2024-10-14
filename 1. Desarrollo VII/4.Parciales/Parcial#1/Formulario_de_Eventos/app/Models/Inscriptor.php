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
        'nombre', 'apellido', 'edad', 'sexo', 'residencia',
        'nacionalidad', 'telefono', 'correo', 'tema'];


    // Relacion con la tabla Pais
    public function residencia()
    {
        return $this->belongsTo(Pais::class, 'residencia', 'pais_id');
    }

    // Relacion con la tabla Pais
    public function nacionalidad()
    {
        return $this->belongsTo(Pais::class, 'nacionalidad', 'pais_id');
    }

    // Relacion con la tabla de areas de interes
    public function area()
    {
        return $this->belongsTo(Area::class, 'tema', 'area_id');
    }
}
