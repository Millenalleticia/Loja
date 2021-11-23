<?php

namespace App\Http\Controllers;

use \App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function formRegister(){

        return view ('auth.register');
    }
    public function formLogin(){
        return view('auth.login');
    }
    public function register(Request $request ){

        $user =new User;
        $user->name =$request-> name;
        $user->email =$request-> email;
        $user->password = Hash::make($request-> password);

        if ($user-> save()){
            return redirect()->route ('login');
        }
        return redirect()->back();
    }

    public function login(Request $request){

        $credencials = [
            'email'=> $requestv->email,
            'password'=> $request -> password
        ];

         if (Auth::attempt( $credencials) ) {
             return redirect('home');
         }else{
             return redirect()-> back();
         }
    }
}
