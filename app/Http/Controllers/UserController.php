<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        echo "Listar todos os usuários";
    }
    public function store (Request $request){
        echo "Nome :".$request-> name."<br>";
        echo"Email :" .$request-> email ;
    }
}
