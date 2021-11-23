<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registar Usuários</title>
</head>
<body>
    <form action="{{ url('/register') }}" method= "POST">
    @csrf 

    <label for="">Nome</label>
    <br>
    <input type="text" name= "name" required>
    <br>
    <label for="">Email</label>
    <br>
    <input type="email" name= "email" required>
    <br>
    <label for="">Senha</label>
    <br>
    <input type="password" name= "password" required>
    <br>
    <label for="">Confirmar Senha</label>
    <br>
    <input type="password" name= "password_confirmation" required>
    <br>
    <input type="submit" value ="Registar">

    </form>
</body>
</html>