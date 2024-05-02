<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/1', function () {
    return view('home');
});

Route::get('/2', function () {
    return view('Teste1');
});

Route::get('/3', function () {
    return view('cria-conta');
});

Route::post('/salva-usuario',function(Request $request){
    
    // dd($request);

    $usuario = new User();
    $usuario->name = $request->nome;
    $usuario->email = $request->email;
    $usuario->password = $request->senha;
    $usuario->save();
    dd("Salvo com sucesso");

})->name('salva-usuario');



