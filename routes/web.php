<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produto;

Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
    $listaProdutos = Produto::all();
    return view('home', compact('listaProdutos'));
});

Route::view('/1','cria-conta');

Route::view('/2','teste1');

Route::view('/3','Cadastra-produto');

Route::post('/salva-usuario',function(Request $request){
    
    // dd($request);

    $usuario = new User();
    $usuario->name = $request->nome;
    $usuario->email = $request->email;
    $usuario->password = $request->senha;
    $usuario->save();
    dd("Salvo com sucesso");

})->name('salva-usuario');
