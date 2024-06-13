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

Route::view('/register','cria-conta');

Route::view('/login','login')->name("login");

Route::post('/salva-usuario',function(Request $request){
    
    // dd($request);

    $usuario = new User();
    $usuario->name = $request->nome;
    $usuario->email = $request->email;
    $usuario->password = $request->senha;
    $usuario->save();
    //dd("Salvo com sucesso");

    return redirect ('/login');

})->name('salva-usuario');

Route::view('/pregister','Cadastra-produto')->middleware('auth');

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

     //dd("Salvo com sucesso");
    return redirect('/');
   

    })->name('salva-produto')->middleware('auth');

    Route::post('/logar', function (Request $request) {
        
        // dd($request);

        $credentials = $request->validate([

            'email' => ['required', 'email'], //verifica se tem enail e se é email
            
            'senha' => ['required'], //verifica se tem senha
            
            ]);
            
            //compara se os dados no banco de dados são iguais o que ele preenchau
            
            If (Auth::attempt(['email' => $request->email, 'password' => $request->senha])) {
            
            //cria a sessão do usuário logado
            
            $request->session()->regenerate();
            
            //redireciona para a tela de cadastro de produtos
            
            return redirect()->intended('/');
            }
            else{
                    dd("Usuário ou senha incorretos");
            }

    })->name('logar');

    Route::get('sair', function () {
        Auth::logout();
            return redirect ('/');
    });