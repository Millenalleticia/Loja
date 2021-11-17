<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){

        echo"Listar todos os Clientes";
    }
    
    public function store(Request $request){

        echo"Nome: ",$request->name."<br>";
        echo"Email: ",$request->email."<br>";
    }
}
