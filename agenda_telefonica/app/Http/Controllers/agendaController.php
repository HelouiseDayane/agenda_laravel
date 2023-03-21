<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agenda_telefonica;


class agendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return agenda_telefonica::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(agenda_telefonica::create($request->all())){
            return response()->json([
                'Contato cadastrado com sucesso.'
            ], 201);
        }
        return response()->json([
            'Erro ao cadastrar contato.'
        ], 404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show($agenda)
    {
        $agenda_telefonica = agenda_telefonica::find($agenda);
        if($agenda_telefonica){
         $response = [
            "agenda_telefonica" => $agenda_telefonica,
            "telefone" =>$agenda_telefonica->agendas
         ];
  
            return $response;
        }
        return response()->json([
            'Erro não existe contato com esse id'
        ], 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $agenda)
    {
        $agenda = agenda_telefonica::find($agenda);
       if($agenda){
        $agenda->update($request->all());
       }
       return response()->json([
        'message' =>  'Erro ao tentar editar contato.'
    ], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy($agenda)
    {
        if(agenda_telefonica::destroy($agenda)){
            return response()->json([
              'message' => 'Contato excluido com sucesso.'
            ], 201);
        }
        return response()->json([
            'message' =>  'Erro ao excluir contato.'
        ], 404);
    }
}
