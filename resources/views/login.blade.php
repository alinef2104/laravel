<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Adote um Amigo</title>
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
      .login-container {
        background-color: #D9BCA3;
        border-radius: 10px;
        padding: 30px;
        margin-top: 100px;
        max-width: 400px;
        margin-left: auto;
        margin-right: auto;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      }
      .login-container h2 {
        color: #7B8C69;
        text-align: center;
        margin-bottom: 20px;
      }
      .form-control {
        background-color: rgb(224, 206, 188);
        border: 1px solid #7B8C69;
        color: #A67A60;
      }
      .form-control:focus {
        border-color: #A67A60;
        box-shadow: none;
      }
      .footer {
        background-color: #7B8C69;
        color: rgb(224, 206, 188);
        text-align: center;
        padding: 10px 0;
        position: fixed;
        bottom: 0;
        width: 100%;
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
              <a class="nav-link" href="{{ route('principal') }}">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('registrar') }}">Registrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('login') }}">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="login-container">
      <h2>Login</h2>
      <form>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu email" required>
        </div>
        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Entrar</button>
        <p class="text-center mt-3">
          <a href="#" style="color: #7B8C69;">Esqueceu a senha?</a>
        </p>
        <p class="text-center">
          Não tem uma conta? <a href="{{ route('registrar') }}" style="color: #7B8C69;">Registre-se</a>
        </p>
      </form>
    </div>

    <footer class="footer">
      <p>&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>