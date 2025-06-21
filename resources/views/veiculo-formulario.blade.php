<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Cadastro de Veículo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f4f8;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .card {
            max-width: 600px;
            width: 100%;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            border-radius: 12px;
            background: white;
            padding: 30px;
        }
        .card h2 {
            color: #2c3e50;
            margin-bottom: 25px;
            font-weight: 700;
            text-align: center;
        }
        .btn-primary {
            background-color: #457b9d;
            border-color: #457b9d;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #1d3557;
            border-color: #1d3557;
        }
        label.form-label {
            font-weight: 600;
            color: #34495e;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Cadastro de Veículo</h2>
        <form action="{{ route('veiculo-store') }}" method="POST">
            @csrf

            <input type="hidden" name="id" value="{{ $veiculo->id ?? old('id') }}">

            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" name="marca" id="marca" class="form-control" value="{{ $veiculo->marca ?? old('marca') }}" required>
            </div>

            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" name="modelo" id="modelo" class="form-control" value="{{ $veiculo->modelo ?? old('modelo') }}" required>
            </div>

            <div class="mb-3">
                <label for="ano" class="form-label">Ano</label>
                <input type="text" name="ano" id="ano" class="form-control" value="{{ $veiculo->ano ?? old('ano') }}" required>
            </div>

            <div class="mb-3">
                <label for="placa" class="form-label">Placa</label>
                <input type="text" name="placa" id="placa" class="form-control" value="{{ $veiculo->placa ?? old('placa') }}" required>
            </div>

            <div class="mb-3">
                <label for="cor" class="form-label">Cor</label>
                <input type="text" name="cor" id="cor" class="form-control" value="{{ $veiculo->cor ?? old('cor') }}" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
        </form>
    </div>
</body>
</html>
