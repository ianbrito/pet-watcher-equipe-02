<?php

namespace App\Http\Controllers;

use \App\Credenciada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CredenciadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
      $credenciadas = Credenciada::all();
      return view('accredited.index', compact('credenciadas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accredited.create');
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
        $credenciada = new Credenciada();
        $credenciada->cnpj = $form->cnpj;
        $credenciada->inscricao_estadual = $form->inscricao_estadual;
        $credenciada->razao_social = $form->razao_social;
        $credenciada->telefone = $form->telefone;
        $credenciada->email = $form->email;
        $credenciada->endereco = $form->endereco;
        $credenciada->save();
        return redirect('accredited');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Credenciada  $credenciada
     * @return \Illuminate\Http\Response
     */
    public function show(Credenciada $credenciada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Credenciada  $credenciada
     * @return \Illuminate\Http\Response
     */
    public function edit(Credenciada $credenciada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Credenciada  $credenciada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Credenciada $credenciada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Credenciada  $credenciada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Credenciada $credenciada)
    {
        //
    }
}
