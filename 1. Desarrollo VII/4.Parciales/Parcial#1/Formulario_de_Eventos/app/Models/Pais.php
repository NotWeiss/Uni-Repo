<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;

    protected $table = 'datos_de_pais';
    protected $primaryKey = 'pais_id';
    public $timestamps = false;

    protected $fillable = ['nombre', 'demonimo'];

    public function inscriptoresNacionalidad()
    {
        return $this->hasMany(Inscriptor::class, 'nacionalidad', 'pais_id');
    }

    public function inscriptoresResidencia()
    {
        return $this->hasMany(Inscriptor::class, 'residencia', 'pais_id');
    }
}
