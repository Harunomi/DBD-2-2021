<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Libro;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $libro = new Libro;
        $libro->name = $request->name;
        $libro->link = $request->link;
        $libro->fecha_publicacion = $request->fecha_publicacion;
        $libro->autor = $request->autor;
        $libro->save();
        return response()->json([
            "message" => "Se creo un nuevo libro",
            "id" => $libro->id
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
        $libro = Libro::find($id);
        if($libro == NULL){
            return "No existe ese libro con esa ID";
        }
        return response()->json($game);

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
        $libro = Libro::find($id);
        if($libro == NULL){
            return "No existe un libro con esa ID";
        }
        $libro->name = $request->name;
        $libro->link = $request->link;
        $libro->fecha_publicacion = $request->fecha_publicacion;
        $libro->autor = $request->autor;
        $libro->save();

        return response()->json([
            "message"=>"Se ha actualizado el libro",
            "id"=>$libro->id
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
        $libro = Libro::find($id);
        if($libro == NULL){
            return "No existe un libro con esa ID";
        }
        $libro->delete();

        return response()->json([
            "message" => "Se ha eliminado el libro",
            "id" =>$libro->id
        ]);
    }
}
