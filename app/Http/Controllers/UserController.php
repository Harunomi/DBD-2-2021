<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

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
        $validarDatos = Validator::make($request->all(),
            [
                'name'=>'required|min:4|max:30|unique:users,name',
                'password' => [
                    'required',
                    'string',
                    'min:8',             // must be at least 8 characters in length
                    'regex:/[a-z]/',      // must contain at least one lowercase letter
                    'regex:/[A-Z]/',      // must contain at least one uppercase letter
                    'regex:/[0-9]/',      // must contain at least one digit
                ],
                'email'=>'required|max:30|unique:users,email',
            ],
            [
                'name.required'=>'Debes ingresar un nombre',
                'name.min'=>'El nombre debe ser de largo mínimo :min',
                'name.max'=>'El nombre debe ser de largo máximo :max', 
                'password.required'=>'Debe ingresar una contraseña',
                'password.regex'=>'La contraseña debe cumplir el formato',
                'email.required'=>'Debe ingresar un correo electronico',
                'email.unique'=>'El correo electronico ya existe'
            ]
            );
            $validarDatos->validate();

            $user = new User;
            $user->name = $request->name;
            $user->password = $request->password;
            $user->email = $request->email;
            $user->id_rol = 1;
            $user->save();
            return redirect('/');


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
        $user = User::find($id);
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
