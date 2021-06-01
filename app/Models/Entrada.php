<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EntradaUbicacion;

class Entrada extends Model
{
    use HasFactory;

    protected $table = 'TENTRADAS';
  	protected $primaryKey = 'ENEV_ENEV';

  	public function direccion()
    {
        return $this->hasOne(EntradaUbicacion::class,'ENUB_ENUB', 'ENEV_DIRECCION');
    }
}
