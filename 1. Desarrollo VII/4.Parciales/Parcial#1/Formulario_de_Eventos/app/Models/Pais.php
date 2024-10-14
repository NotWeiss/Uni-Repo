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

    
}
