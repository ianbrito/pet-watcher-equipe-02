<?php

namespace App\Http\Controllers;

use App\Proprietario;
use Illuminate\Http\Request;

class ProprietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proprietarios = Proprietario::all();
        return view('proprietario.index', compact('proprietarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proprietario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = $request;
        $proprietario = new Proprietario();
        $proprietario->identificador = $form->identificador;
        $proprietario->tipo_pessoa = $form->tipo_pessoa;
        $proprietario->nome = $form->nome;
        $proprietario->telefone = $form->telefone;
        $proprietario->email = $form->email;
        $proprietario->endereco = $form->endereco;
        $proprietario->save();
        return redirect('proprietario');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\proprietario  $proprietario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proprietario = Proprietario::findOrFail($id);
        return view('proprietario.show',compact('proprietario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\proprietario  $proprietario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proprietario = Proprietario::findOrFail($id);
        return view('proprietario.edit',compact('proprietario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\proprietario  $proprietario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proprietario = Proprietario::findOrFail($id);
        $proprietario->identificador = $request->identificador;
        $proprietario->tipo_pessoa = $request->tipo_pessoa;
        $proprietario->nome = $request->nome;
        $proprietario->telefone = $request->telefone;
        $proprietario->email = $request->email;
        $proprietario->endereco = $request->endereco;
        $proprietario->save();
        return redirect('proprietario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\proprietario  $proprietario
     * @return \Illuminate\Http\Response
     */
    public function destroy(proprietario $proprietario)
    {
        //
    }
}
