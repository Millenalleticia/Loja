<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<h1>Cadastro de Produtos</h1>
 initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Produto</h1>
    <form action="/cadastro-produto" method="POST">
        @csrf
        <label for="">Nome</label>
        <input type="text"name="name">
        <br>
        <label for="">ID</label>
        <input type="text"id="id">
        <br>
        <button type ="submit">Cadastrar</button>
    </form>
</body>
</html>