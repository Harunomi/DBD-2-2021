<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BibliotecaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biblioteca = Biblioteca::all();
        if($biblioteca == NULL){
            return "No existen bibliotecas";
        }
        return response()->json($biblioteca);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $biblioteca = new Biblioteca;
        $biblioteca->name = $request->name;
        $biblioteca->id_usuario = $request->id_usuario;
        $biblioteca->id_libro = $request->id_libro;
        $biblioteca->save();

        return response()->json([
            "message"=>"Se ha creado una nueva Biblioteca",
            "id" => $biblioteca->id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $biblioteca = Biblioteca::find($id);
        if($biblioteca == NULL){
            return "No existen una biblioteca con esa ID";
        }
        return response()->json($biblioteca);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $biblioteca = new Biblioteca;
        $biblioteca->name = $request->name;
        $biblioteca->id_usuario = $request->id_usuario;
        $biblioteca->id_libro = $request->id_libro;
        $biblioteca->save();

        return response()->json([
            "message"=>"Se ha actualizado la biblioteca",
            "id"=>$biblioteca->id

        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $biblioteca = Biblioteca::find($id);
        if($biblioteca == NULL){
            return "No existen bibliotecas";
        }
        $biblioteca->delete();

        return response()->json([
            "message"=>"Se ha eliminado la biblioteca",
            "id"=>$biblioteca->id
        ]);
    }
}
