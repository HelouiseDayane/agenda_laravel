<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\telefone;

class telefoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return telefone::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(telefone::create($request->all())){
            return response()->json([
                'Telen cadastrado com sucesso.'
            ], 201);
        }
        return response()->json([
            'Erro ao cadastrar contato.'
        ], 404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $telefone
     * @return \Illuminate\Http\Response
     */
    public function show($telefone)
    {   $telefone = telefone::find($telefone);
        if($telefone){
               
            return new telefoneresource($telefone);
        }
        return response()->json([
            'Erro não existe telefone no qual voce esteja buscando'
        ], 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $telefone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $telefone)
    {
        $telefone = telefone::find($telefone);
        if($telefone){
            $telefone->update($request->all());
           }
           return response()->json([
            'message' =>  'Erro ao tentar editar telefone.'
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $telefone
     * @return \Illuminate\Http\Response
     */
    public function destroy($telefone)
    {
        if(telefone::destroy($telefone)){
            return response()->json([
              'message' => 'Telefone excluido com sucesso.'
            ], 201);
        }
        return response()->json([
            'message' => 'Erro ao excluir telefone.'
        ], 404);
    }
}
