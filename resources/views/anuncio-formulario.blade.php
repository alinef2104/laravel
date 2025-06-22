<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Cadastro de Anúncio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            box-shadow: 0 4px 20px;
            border: none;
        }
        .card-header {
            background: #4b6cb7;
            color: white;
            font-weight: bold;
        }
        .btn-primary {
            background-color: #457b9d;
            border-color: #457b9d;
        }
        .btn-primary:hover {
            background-color: #1d3557;
            border-color: #1d3557;
        }
    </style>
</head>
    <body>
        <div class="container mt-5">
            <div class="card mx-auto" style="max-width: 600px;">
                <div class="card-header text-center">
                    Cadastro de Anúncio
                </div>
                <div class="card-body">
                    <form action="{{ route('anuncio-store') }}" method="POST">
                        @csrf

                        <input type="hidden" name="id" value="{{ $anuncio->id ?? '' }}">

                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título</label>
                            <input type="text" class="form-control" name="titulo" id="titulo"
                                placeholder="Digite o título do anúncio"
                                value="{{ $anuncio->titulo ?? old('titulo') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição</label>
                            <input type="text" class="form-control" name="descricao" id="descricao"
                                placeholder="Descreva o anúncio"
                                value="{{ $anuncio->descricao ?? old('descricao') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="preco" class="form-label">Preço</label>
                            <input type="text" class="form-control" name="preco" id="preco"
                                placeholder="R$ 0,00"
                                value="{{ $anuncio->preco ?? old('preco') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="data_publicacao" class="form-label">Data de Publicação</label>
                            <input type="date" class="form-control" name="data_publicacao" id="data_publicacao"
                                value="{{ $anuncio->data_publicacao ?? old('data_publicacao') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="proprietario_id" class="form-label">Proprietário</label>
                            <select name="proprietario_id" id="proprietario_id" class="form-select" required>
                                <option value="">Selecione</option>
                                @foreach ($proprietarios as $proprietario)
                                    <option value="{{ $proprietario->id }}" 
                                        {{ (isset($anuncio) && $anuncio->proprietario_id == $proprietario->id) ? 'selected' : '' }}>
                                        {{ $proprietario->nome }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="veiculo_id" class="form-label">Veículo</label>
                            <select name="veiculo_id" id="veiculo_id" class="form-select" required>
                                <option value="">Selecione</option>
                                @foreach ($veiculos as $veiculo)
                                    <option value="{{ $veiculo->id }}" 
                                        {{ (isset($anuncio) && $anuncio->veiculo_id == $veiculo->id) ? 'selected' : '' }}>
                                        {{ $veiculo->marca }} - {{ $veiculo->modelo }} ({{ $veiculo->placa }})
                                    </option>
                                @endforeach
                            </select>
                        </div>    

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                {{ isset($anuncio) ? 'Atualizar' : 'Cadastrar' }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
