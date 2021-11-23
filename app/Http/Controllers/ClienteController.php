<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller{
    

public function create()
{
    return 'exibir novo cadastro de cliente';
}
public function edit($id)
{
    return "edita cliente:{$id}";
}
public function new()
{
    return 'cadastro de novo cliente';
}

public function newclient($id)
{
    return "edita um cliente: {$id}";
}
public function destroy($id)
{
    return "deleta um cliente: {$id}";
}
}