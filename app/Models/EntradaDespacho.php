<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntradaDespacho extends Model
{
    use HasFactory;

    protected $table = 'TENTRADA_DESPACHO';
  	protected $primaryKey = 'ENPO_ENPO';
}
