<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnuncioController extends Controller
{
    function formulario(){
        return view('anuncio-formulario');
    }

    function store(){
            return view('anuncio-store');
    }

    function listar(){
            return view('anuncio-listar');
    }

    function remover(){
        return view('anuncio-remover');
    }

    function editar(){
        return view('anuncio-editar');
    }
}
