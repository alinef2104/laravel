<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Cadastro de Proprietário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f1f3f5;
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
    <div class="container mt-5 mb-5">
        <div class="card mx-auto" style="max-width: 600px;">
            <div class="card-header text-center">
                Cadastro de Proprietário
            </div>
            <div class="card-body">
                <form action="{{ route('proprietario-store') }}" method="POST">
                    @csrf

                    <input type="hidden" name="id" value="{{ $proprietario->id ?? old('id') }}">

                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control"
                            value="{{ $proprietario->nome ?? old('nome') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" name="cpf" id="cpf" class="form-control"
                            value="{{ $proprietario->cpf ?? old('cpf') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" name="endereco" id="endereco" class="form-control"
                            value="{{ $proprietario->endereco ?? old('endereco') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" name="telefone" id="telefone" class="form-control"
                            value="{{ $proprietario->telefone ?? old('telefone') }}" required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                            {{ isset($proprietario) ? 'Atualizar' : 'Cadastrar' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
