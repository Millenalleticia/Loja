<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="/login-efetuado" method="POST">
        @csrf
        <label for="">Nome</label>
        <input type="text"placeholder="Nome">
        <br>
        <label for="">Senha</label>
        <input type="password" placeholder="Senha">
        <br>
        <button type ="submit">Entrar</button>
    </form>
</body>
</html>
