<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    function formulario(){
			return view('veiculo-formulario');
    }

    function store(Request $dados){
        $veiculo = new VeiculoModel();
        $veiculo->create($dados->all());
    } 

    function listar(){
            return view('veiculo-listar');
    }

    function remover(){
        return view('veiculo-remover');
    }

    function editar(){
        return view('veiculo-editar');
    }
}


