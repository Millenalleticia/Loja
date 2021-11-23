<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
</head>
<body>
<h1> Cadastro de Clientes </h1> 

    <form action="/InsertUser" method= "POST"> 
        @csrf 
        <label for="">Nome</label>
        <input type="text"name="name">
        <br>
        <label for="">Email</label>
        <input type="text"email="email">
        <br>       
        <button type ="submit">Cadastrar</button>
    </form>
</body>
</html>