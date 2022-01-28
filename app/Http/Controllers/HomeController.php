<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Libro;

class HomeController extends Controller
{
    public function vistaPrincipal(){
        $user= User::all();
        $libros = Libro::all();
        return view('home',[
            'users'=>$user,
            'libros'=>$libros,
        ]);
    }
}
