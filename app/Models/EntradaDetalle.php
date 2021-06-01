<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Entrada;
use App\Models\EntradaAnexo;
use App\Models\EntradaDespacho;
use App\Models\EntradaUbicacion;

class EntradaDetalle extends Model
{
    use HasFactory;

    protected $table = 'TENTRADA_DETALLE';
  	protected $primaryKey = 'ENDE_ENDE';


  	public function Entrada()
    {
        return $this->hasOne(Entrada::class,'ENEV_ENEV', 'ENDE_ENTRADA_ID');
    }

    public function Anexo()
    {
        return $this->hasOne(EntradaAnexo::class,'ENAN_ENAN', 'ENDE_ANEXO_ID');
    }

    public function Despacho()
    {
        return $this->hasOne(EntradaDespacho::class,'ENPO_ENPO', 'ENDE_DESPACHO_ID');
    }

    public function Ubicacion()
    {
        return $this->hasOne(EntradaUbicacion::class,'ENUB_ENUB', 'ENDE_UBICACION_ID');
    }
}
