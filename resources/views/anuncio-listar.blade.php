<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Lista de Anúncios</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f8f9fa; 
    }
    thead tr {
      background:  #4b6cb7; 
      color: white;
    }
    .btn-danger {
      background-color: #e63946;
      border-color: #e63946;
    }
    .btn-danger:hover {
      background-color: #d62828;
      border-color: #d62828;
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
    <h2 class="mb-4 text-center text-primary">Lista de Anúncios</h2>
    <div class="table-responsive shadow rounded">
      <table class="table table-striped table-hover align-middle">
        <thead>
          <tr>
            <th>Código</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Data de Publicação</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($anuncios as $anuncio)
          <tr>
            <td>{{ $anuncio->id }}</td>
            <td>{{ $anuncio->titulo }}</td>
            <td>{{ $anuncio->descricao }}</td>
            <td>R$ {{ number_format($anuncio->preco, 2, ',', '.') }}</td>
            <td>{{ date('d/m/Y', strtotime($anuncio->data_publicacao)) }}</td>
            <td>
              <a href="/anuncio/remove/{{ $anuncio->id }}" class="btn btn-danger btn-sm me-1">Excluir</a>
              <a href="{{ route('anuncio-editar', $anuncio->id) }}" class="btn btn-primary btn-sm">Atualizar</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
