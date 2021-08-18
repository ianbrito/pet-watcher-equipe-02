<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // TODO retorna todos user
        return view('user.index');
    }


   public function create(Request $request)
   {
      return view('user.adm.create-user');
   }

    public function store(Request $request)
    {
      $form = $request;
      $user = new User();
      $user->tipo_conta = $form->tipo_conta;
      $user->login = $form->login;
      $user->name = $form->nome;
      $user->email = $form->email;
      $user->password = $form->senha;
      $user->save();
      return redirect('');
    }



    public function show($id)
    {
        //
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
        //
    }

    // TODO Atualizar senha
    public function updatePassword(Request $request, $user)
    {
        $users = User::find($user);
        $users->password = bcrypt($request->password);
        $users->save();
        return redirect('home');
    }

    public function destroy($id)
    {
        //
    }
}
