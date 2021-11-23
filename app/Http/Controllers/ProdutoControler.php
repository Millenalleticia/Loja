<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoControler extends Controller
{
    //

public function inseri()
{
    return 'exibir o  produto';
}
public function colocar($id)
{
    return "edita produto: {$id}";
}
public function store()
{
    return 'cadastro de novo produto';
}public function update($id)
{
    return "edita um produto: {$id}";
}public function dell($id)
{
    return "deleta um produto: {$id}";
}
}