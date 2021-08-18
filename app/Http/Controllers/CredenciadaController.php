<?php

namespace App\Http\Controllers;

use \App\Credenciada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use \App\Http\Controllers\UserController;
use \App\User;

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
      return view('credenciada.index', compact('credenciadas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('credenciada.create');
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

        $user = new User();
        $user->tipo_conta = $form->tipo_conta;
        $user->login = $form->cnpj;
        $user->name = $form->razao_social;
        $user->email = $form->email;
        $user->password = bcrypt(substr($form->cnpj,0,-6));
        $user->save();

        $login = $form->cnpj;
        $password = substr($form->cnpj,0,-6);

        return view('credenciada.acesso-cred',compact('login','password'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Credenciada  $credenciada
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
      $credenciada = Credenciada::findOrFail($id);
      return view('credenciada.show',compact('credenciada'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Credenciada  $credenciada
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $credenciada = Credenciada::findOrFail($id);
      return view('credenciada.edit', compact('credenciada'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Credenciada  $credenciada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $credenciada = Credenciada::findOrFail($id);
        $credenciada->cnpj = $request->cnpj;
        $credenciada->inscricao_estadual = $request->inscricao_estadual;
        $credenciada->razao_social = $request->razao_social;
        $credenciada->telefone = $request->telefone;
        $credenciada->email = $request->email;
        $credenciada->endereco = $request->endereco;
        $credenciada->save();
        return redirect('credenciadas');
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

    public function setStatus(Request $request){
      $credenciada = Credenciada::findOrFail($request->id);
      if($credenciada->ativo == true){
         $credenciada->ativo = false;
         $credenciada->save();
         return redirect('credenciadas');
      }else{
         $credenciada->ativo = true;
         $credenciada->save();
         return redirect('credenciadas');
      }
    }

    // Mostra dados para login
    public function acessoCred($id){
       $user = User::findOrFail($id);
       $login = $user->login;
       $password = $user->password;
       return view('credenciada.acesso-cred',compact('login','password'));
    }
}
