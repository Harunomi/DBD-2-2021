<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Libro;

class adminCrearLibroController extends Controller
{
    public function adminCrearLibro(){
        $users = User::all();
        $libros = Libro::all();

        return view('adminCrearLibro',[
            'users'=>$users,
            'libros'=>$libros,
        ]);
    }
}
