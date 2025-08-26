<!DOCTYPE html>
<html>
<head><title>Cadastro</title></head>
<body>
    <h2>Cadastro</h2>

    @if($errors->any())
        <ul style="color: red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <input type="text" name="name" value="{{ old('name') }}" placeholder="Nome"><br>
        <input type="email" name="email" value="{{ old('email') }}" placeholder="E-mail"><br>
        <input type="password" name="password" placeholder="Senha"><br>
        <input type="password" name="password_confirmation" placeholder="Confirme a senha"><br>
        <button type="submit">Cadastrar</button>
    </form>

    <p>Já tem conta? <a href="{{ route('login') }}">Faça login</a></p>
</body>
</html>
