@extends('layout')
@section('content')

<div class="container-login">
   <h1>Editar Funcionario</h1>
<section class="login-section">
        <form action=" {{action('FuncionarioController@update',$funcionario->id )}} " method="post">
            @csrf
            @method('put')
            <input hidden name="" type="text" value="1">
            <label>
                Cpf *
                <input type="text" value="{{$funcionario->cpf_f}}" name="cpf" required>
             </label>

             <label type="text" >
                Nome *
                <input type="text" value="{{$funcionario->nome_f}}" name="nome" required>
             </label>

             <label type="text" >
                Telefone *
                <input type="text" value="{{$funcionario->telefone_f}}" name="telefone" required>
             </label>

             <label type="text" >
                Telefone *
                <input type="text" value="{{$funcionario->email_f}}" name="email" required>
             </label>

             <label type="text" >
                Telefone *
                <input type="text" value="{{$funcionario->endereco_f}}" name="endereco" required>
             </label>
             <button type="submit">Editar</button>
        </form>

        @if ($errors->has('cpf_f') || $errors->has('nome_f') || $errors->has('telefone_f') || $errors->has('email_f') || $errors->has('endereco_f'))
          <span class="">
              <strong>Erro ao cadastrar</strong>
          </span>
        @endif
     </section>
     </div>
     @stop
