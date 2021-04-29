<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Pessoa;

class ContactoController extends Controller
{
    public function index(){
        $contactos = Pessoa::all();
        return response()->json($contactos, 200);
    }

    public function show($id){
        $contacto = Pessoa::find($id);
        return response()->json($contacto);
    }

    public function store(Request $request){
        try{

            $contactos_data = $request->all();
            Pessoa::create($contactos_data);

            return response()->json(['msg'=>"Feito com sucesso"]);
        }catch(\Exception $e){
return response()->json(['msg'=>$e->getMessage()]);
        }
       

    }

    public function update(Request $request, $id){
        try{

            $contactos_data = $request->all();
            Pessoa::find($id)->update($contactos_data);

            return response()->json(['msg'=>"Actualizado com sucesso"]);
        }catch(\Exception $e){
return response()->json(['msg'=>$e->getMessage()]);
        }
       

    }

    public function delete($id){
        try{
            Pessoa::find($id)->delete();
            return response()->json(['msg'=>"Contacto Eliminado"]);
        }catch(\Exception $e){
return response()->json(['msg'=>$e->getMessage()]);
        }
    }
}