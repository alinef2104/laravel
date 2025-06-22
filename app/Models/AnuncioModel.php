<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnuncioModel extends Model
{
    use HasFactory;

    protected $table = 'anuncio';

    protected $fillable = ['id', 'titulo', 'descricao', 'preco', 'data_publicacao', 'proprietario_id', 'veiculo_id'];

    public function veiculo() {
    return $this->belongsTo(\App\Models\VeiculoModel::class, 'veiculo_id');
    }

    public function proprietario() {
        return $this->belongsTo(\App\Models\ProprietarioModel::class, 'proprietario_id');
    }

}

