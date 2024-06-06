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

Route::post('/salva-usuario',function(Request $request){
    
    // dd($request);

    $usuario = new User();
    $usuario->name = $request->nome;
    $usuario->email = $request->email;
    $usuario->password = $request->senha;
    $usuario->save();
    dd("Salvo com sucesso");

})->name('salva-usuario');

Route::view('/3','Cadastra-produto');

Route::post('/salva-produto',function (Request $request){

    // dd($request);

    $produto = new Produto();
    $produto->name = $request->name;
    $produto->valor = $request->valor;
    $produto->descricao = $request->descricao;

    $file = request()->file('foto');

    $foto = $file->store('produtos', ['disk' => 'fotos']);

    $produto->foto = $foto;

    $produto->user_id = 1;


    $produto->save();
    dd("Salvo com sucesso");

    })->name('salva-produto');
