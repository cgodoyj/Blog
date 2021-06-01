<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntradaOrigen extends Model
{
    use HasFactory;

    protected $table = 'TENTRADA_ORIGEN';
  	protected $primaryKey = 'ORIG_ORIG';
}
