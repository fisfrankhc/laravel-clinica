<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /* public function __invoke(){
        return "VISTA DE USUARIOS";
    } */
    public function index(){
        $listaDeUsuarios = User::all();
        return view('configuracion.usuario_lista', compact('listaDeUsuarios'));
    }

    public function create(){
        return "VISTA DE CREATE";
    }
    public function show($usuarioVistaId){
        return "VISTA DE SHOW";
    }
}
