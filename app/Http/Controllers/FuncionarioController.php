<?php

namespace App\Http\Controllers;

use App\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('funcionario.index', compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view(view:'funcionario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $funcionario = new Funcionario();
        $funcionario->cpf_f = $request->cpf;
        $funcionario->nome_f = $request->nome;
        $funcionario->telefone_f = $request->telefone;
        $funcionario->email_f = $request->email;
        $funcionario->endereco_f = $request->endereco;
        $funcionario->save();
        return redirect(to:'funcionario');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $funcionario = Funcionario::find($id);
        return view('funcionario.show', compact('funcionario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $funcionario = Funcionario::find($id);
        return view('funcionario.edit', compact('funcionario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->cpf_f = $request->cpf;
        $funcionario->nome_f = $request->nome;
        $funcionario->telefone_f = $request->telefone;
        $funcionario->email_f = $request->email;
        $funcionario->endereco_f = $request->endereco;
        $funcionario->save();
        return redirect(to:'funcionario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $funcionario = Funcionario::find($id);
        $funcionario->delete();
        return redirect(to:'funcionario');
    }
}
