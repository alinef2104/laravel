<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: rgb(224, 206, 188);
        color: #A67A60;
      }
      .navbar {
        background-color: #D9BCA3 !important;
      }
      .navbar-brand, .nav-link {
        color: #7B8C69 !important;
      }
      .btn-primary {
        background-color: #7B8C69;
        border-color: #7B8C69;
      }
      .btn-primary:hover {
        background-color: #A67A60;
        border-color: #A67A60;
      }
      .card {
        background-color: #D9BCA3;
        color: #7B8C69;
      }
      .card img {
        border-bottom: 1px solid #7B8C69;
        height: 250px; /* Altura fixa para as imagens */
        object-fit: cover; /* Garante que a imagem cubra o espaço sem distorcer */
        width: 100%; /* Largura responsiva */
      }
      footer {
        background-color: #7B8C69;
        color: rgb(224, 206, 188);
      }
      h1 {
        color: #7B8C69;
      }
    </style>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Adote um Amigo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('principal') }}">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('registrar') }}">Registrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-5">
      <h1 class="text-center mb-4">Encontre seu novo amigo</h1>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="https://adotar.com.br/upload/2023-09/animais_imagem1038452.jpg?w=300&format=webp" class="card-img-top" alt="Cachorro 1">
            <div class="card-body">
              <h5 class="card-title">Rex</h5>
              <p class="card-text">Rex é um cachorro muito brincalhão e adora crianças. Ele está esperando por um lar amoroso.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://images.freeimages.com/images/large-previews/bf5/my-cat-mimi-1-1393670.jpg" class="card-img-top" alt="Gato 1">
            <div class="card-body">
              <h5 class="card-title">Mimi</h5>
              <p class="card-text">Mimi é uma gatinha muito carinhosa e tranquila. Ela adora um colo quentinho.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://img.olx.com.br/images/71/710587861313214.jpg" class="card-img-top" alt="Cachorro 2">
            <div class="card-body">
              <h5 class="card-title">Luna</h5>
              <p class="card-text">Luna é uma cachorrinha muito esperta e cheia de energia. Ela adora passeios e brincadeiras.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
      </div>

      
    </div>

    <footer class="text-center mt-5 py-3">
      <p>&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>