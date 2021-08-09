<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function __construct()
    {
        $this->middleware(middleware:'auth');
    }

    public function index()
    {
        // TODO retorna todos user
        return view('user.index');
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
        $users->password = $request->password;
        $users->save();
        return redirect(to: 'home');
    }

    public function destroy($id)
    {
        //
    }
}
