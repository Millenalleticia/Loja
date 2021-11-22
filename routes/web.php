<?php

use App\Http\Controllers\ClienteController;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cadastro',function(){
    return view('cadastro');

});
Route::post('Inserir Cliente',[ClienteController::class,'store']);
Route::post('/cadastro-cliente',function(Request $request){
    print_r ($request->all ());

});
Route::get('/produto', function(){
    return view('produto');
});

Route::post('/cadastro-produto', function(Request $request){
    print_r ($request->all());
});

Route::get('/login',function(){
    return view ('auth.login');
});

Route::post('/login-efetuado', function(Request $request){
    
});

Route::get('cliente',[ClienteController::class,'index']);

