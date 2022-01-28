<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request){
        $user = User::all();
        for($i=0;$i<count($user);++$i){
            if (($user[$i]->email==$request->email)and($user[$i]->password==$request->password)){
                $request->session()->put('id_user',$user[$i]->id);
                $request->session()->put('id_rol',$user[$i]->id_rol);
                return redirect('/home');
            }
        }

        return back()->with('loginError','Uno o mas de los campos ingresados no coincides con los datos de la base de datos, intentelo nuevamente.');
    }
}
