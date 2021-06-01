<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Entrada;
use App\Models\EntradaAnexo;
use App\Models\EntradaOrigen;
use App\Models\EntradaDetalle;
use App\Models\EntradaDespacho;
use App\Models\EntradaUbicacion;

class EntradaController extends Controller
{
    function index(){
    	$EntradasEvento = Entrada::with('direccion')->get();
        return view('Entrada.EntradaIndex',compact('EntradasEvento'));
    }

    public function create()
    {
    	$tiposEntrada = EntradaOrigen::all();
    	$tiposHoraEntrada = DB::table('TTIPO_HORA_ENTRADA')->select('*')->get();
    	
    	$edit = false;
    	//dd($EntradaEdit );
    	return view('Entrada.EntradaCreateForm', compact('tiposEntrada','tiposHoraEntrada','edit'));
    }

    public function store(Request $request){

    	//dd($request);

    	try{
    		DB::beginTransaction();

    		$direccion = new EntradaUbicacion;
	    	$direccion->ENUB_LOCALIDAD_ID = $request->localidad;
	    	$direccion->ENUB_COLONIA_ID = $request->colonia;
	    	$direccion->ENUB_CALLES = $request->calle;
	    	$direccion->ENUB_NUMERO_INT = $request->numeroInterior;
	    	$direccion->ENUB_NUMERO_EXT = $request->numeroExterior;
	    	$direccion->ENUB_CUZAMIENTO = $request->Cruzamiento;
	    	$direccion->ENUB_SECTOR = $request->sector;
	    	$direccion->ENUB_CUADRANTE = $request->cuadrante;
	    	$direccion->ENUB_LATITUD = $request->Latitud;
	    	$direccion->ENUB_LONGITUD = $request->Longitud;
	    	$direccion->save();
	    	
	    	$entrada = new Entrada;
	    	$entrada->ENEV_HORA_ENTRADA = $request->horaOrigen;
	    	$entrada->ENEV_TIPO_DELITO = $request->delito;
	    	$entrada->ENEV_CODIGO = "A-00002";
	    	$entrada->ENEV_FOLIO_UNICO = "AS/854D/E7E4/123/2021";
	    	$entrada->ENEV_DESCRIPCION = $request->Descripcion;
	    	$entrada->ENEV_DIRECCION = $direccion->ENBU_ENBU;
	    	$entrada->ENEV_ORIGEN_ID = $request->Origen;
	    	$entrada->ENEV_PAPELETA = $request->folio;
	    	$entrada->ENEV_TIPO_HORA = $request->origenHora;
			$entrada->save();
	    	
	    	$despacho = new EntradaDespacho;
	    	$despacho->ENPO_UNIDAD_ASIGNADA = $request->patrulla;
	    	$despacho->ENPO_RESPONSABLE = $request->comandante;
	    	$despacho->ENPO_OBSERVACIONES = $request->observacionesAuxilio;
	    	$despacho->ENPO_HORA_PIE_TIERRA = $request->horaPieTierra;
	    	$despacho->ENPO_TIPO_HORA = $request->tipoHoraPieTierra;
			$despacho->save();

	    	$entradDetalle = new EntradaDetalle;
	    	$entradDetalle->ENDE_ENTRADA_ID = $entrada->ENEV_ENEV;
	    	$entradDetalle->ENDE_UBICACION_ID = $direccion->ENBU_ENBU;
	    	$entradDetalle->ENDE_DESPACHO_ID = $despacho->ENPO_ENPO;
	    	//$entradDetalle->ENDE_ANEXO_ID
	  		$entradDetalle->save();

	  		DB::commit();
	  		return redirect() -> route("EntradaIndex");

    	}catch(\Exception $e){
    		DB::rollBack();
    		return redirect() -> route("EntradaIndex");

    	}

    }

    public function edit($id)
    { 
    	$tiposEntrada = EntradaOrigen::all();
    	$tiposHoraEntrada = DB::table('TTIPO_HORA_ENTRADA')->select('*')->get();
    	$EntradaEdit = EntradaDetalle::where('ENDE_ENTRADA_ID', '=', $id)->with('Entrada','Anexo','Despacho','Ubicacion')->firstOrFail();
    	$edit = true;

    	

    	//dd($Entrada);
        return view('Entrada.EntradaEditForm', compact('tiposEntrada','tiposHoraEntrada','EntradaEdit','edit'));
    }

    public function update(Request $request, $id)
    {
    	dd($request);
    }
}
