<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Proprietários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .table-container {
            margin-top: 50px;
        }
        .btn-danger {
            background-color: #e63946;
            border: none;
        }
        .btn-danger:hover {
            background-color: #c9182b;
        }
        .btn-primary {
            background-color: #457b9d;
            border: none;
        }
        .btn-primary:hover {
            background-color: #1d3557;
        }
        .table th {
            background: #4b6cb7;
            color: white;
        }
    </style>
</head>
    <body>
        <div class="container table-container">
            <h2 class="text-center mb-4">Lista de Proprietários</h2>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Endereço</th>
                        <th>Telefone</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($proprietarios as $proprietario)
                        <tr>
                            <td>{{ $proprietario->id }}</td>
                            <td>{{ $proprietario->nome }}</td>
                            <td>{{ $proprietario->cpf }}</td>
                            <td>{{ $proprietario->endereco }}</td>
                            <td>{{ $proprietario->telefone }}</td>
                            <td>
                                <a href="/proprietario/remove/{{ $proprietario->id }}" 
                                class="btn btn-danger btn-sm me-1">Excluir</a>
                                <a href="{{ route('proprietario-editar', $proprietario->id) }}" 
                                class="btn btn-primary btn-sm">Atualizar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
