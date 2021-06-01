<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntradaAnexo extends Model
{
    use HasFactory;

    protected $table = 'TENTRADAS_ANEXOS';
  	protected $primaryKey = 'ENAN_ENAN';
}
