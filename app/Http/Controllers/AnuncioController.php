<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnuncioModel;
use App\Models\ProprietarioModel;
use App\Models\VeiculoModel;

class AnuncioController extends Controller
{

    function formulario($id = null){
        $anuncio = AnuncioModel::find($id);
        $proprietarios = ProprietarioModel::all();
        $veiculos = VeiculoModel::all();

        return view('anuncio-formulario', [
            'anuncio' => $anuncio,
            'proprietarios' => $proprietarios,
            'veiculos' => $veiculos
        ]);
    }

    function store(Request $dados){
        if ($dados->id == '') {
            AnuncioModel::create($dados->all());
        } else {
            $anuncio = AnuncioModel::find($dados->id);
            $anuncio->update($dados->all());
        }

        return redirect()->route('anuncio-listar');
    }

    function listar() {
        $anuncios = AnuncioModel::all();
        $proprietarios = ProprietarioModel::all()->keyBy('id'); 
        $veiculos = VeiculoModel::all()->keyBy('id');

        return view('anuncio-listar', [
            'anuncios' => $anuncios,
            'proprietarios' => $proprietarios,
            'veiculos' => $veiculos
        ]);
    }


    function remove($id){
        AnuncioModel::destroy($id);
        return redirect()->route('anuncio-listar');
    }

    function editar($id){
        $anuncio = AnuncioModel::find($id);
        $proprietarios = ProprietarioModel::all();
        $veiculos = VeiculoModel::all();

        return view('anuncio-formulario', [
            'anuncio' => $anuncio,
            'proprietarios' => $proprietarios,
            'veiculos' => $veiculos
        ]);
    }
}
