<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        if($user == NULL){
            return "No existen usuarios";
        }
        return response()->json($user);
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
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->id_role = $request->id_role;
        $user->save();

        return response()->json([
            "message"=>"Se ha creado un nuevo usuario",
            "id" =>$user->id
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
        $user = User::find($id);
        if($user == NULL){
            return "No existe un usuario con esa ID";
        }
        return response()->json($user);
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
        $user = User::find($id);
        if($user == NULL){
            return "No existe un usuario con esa ID";
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->id_role = $request->id_role;
        $user->save();
        return response()->json([
            "message"=>"Se ha actualizado el usuario",
            "id"=>$user->id
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
        $user = User:find($id);
        if($user == NULL){
            return "No se ha encontrado un usuario con esa ID";
        }
        $user->delete();

        return response()->json([
            "message"=>"Se ha eliminado el usuario",
            "id"=>$user->id
        ]);
    }
}
