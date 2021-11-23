<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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
Route::post('/cadastro-cliente',function(Request $request){
    print_r ($request->all ());

});
Route::post('/cadastro-produto', function(Request $request){
    print_r ($request->all());
});

Route::get('/produto', function(){
    return view('produto');
});
Route::post('InsertUser',[UserController::class,'store']);

Route::get('users',[UserController::class,'index']);

Route::get('/register',[AuthController::class, 'formRegister']);

Route::post('/register',[AuthController::class, 'register']);

Route::get('/login',[AuthController:: class,"formLogin"])->name('formLogin');
    
Route::post('/login',[AuthController:: class,"Login"])->name('login');

Route::middleware(['auth'])->group( function (){

});

Route::post('/login-efetuado', function(Request $request){

});
Route::get ('Cliente',[ClienteController::class,'index']);

Route::get ('cliente/create', 'ClientecoController@create')->name('cliente.create');
Route::get ('cliente/{id}/edit', 'ClientecoController@edit')->name('cliente.edit');
Route::get ('produto/inseri', 'ProdutoController@inseri')->name('produto.inseri');
Route::get ('produto/{id}/colocar', 'produtoController@colocar')->name('produto.colocar');
Route::post ('produto', 'produtoController@store')->name('produto.store');
Route::post ('cliente', 'produtoController@new')->name('produto.new');
Route::put ('produto/{id}', 'ClientecoController@update')->name('produto.update');
Route::put ('cliente/{id}', 'ClientecoController@newclient')->name('produto.newclient');
Route::delete ('cliente/{id}', 'ClientecoController@destroy')->name('produto.destroy');
Route::delete('produto/{id}', 'ClientecoController@dell')->name('produto.dell');