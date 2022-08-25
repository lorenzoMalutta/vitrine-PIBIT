<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastroRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CadastroController extends Controller
{
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view("cadastro.cadastro");
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(CadastroRequest $request)
  {
    $credentials = $request->only('email', 'password', 'cpf');

    if (Auth::attempt($credentials)) {
      dd('não pode ser cadastrado');
    } else {
      $user = new User();

      $user = User::create([
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'name' => $request->name,
        'cpf' => $request->cpf,
      ])->givePermissionTo('usuario');

      return  redirect('/login')->with('msg', 'Usuário Criado com sucesso!');
    }
  }
}
