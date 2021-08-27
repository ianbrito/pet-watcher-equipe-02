@extends('layout')

@section('content')
<div class="container-login">
   <div class="card card-cred">
      <div class="card-cred-title" style="display: flex; flex-direction: column; justify-content:center; aling-items:center;">
         <div style="display: flex; justify-content:center; aling-items:center;">
            <img style="width: 60px;" src="{{asset('./pawprints.png')}}" alt="deeeeeee">
         </div>
         <div style="text-align: center;font-size: 30px;">Cadastro de Usuário</div>
      </div>

   <form class="card-body card-cred-body" action="{{action('UserController@store')}}" method="post">
      @csrf

      <label>
         Tipo de Conta *
      </label>
      <input type="text" name="tipo_conta" placeholder="Tipo de Conta" required>

      <label>
         Login de Acesso *
      </label>
      <input type="text" name="login" placeholder="Login" required>

      <label>
         Nome *
      </label>
      <input type="text" name="nome" placeholder="Nome">

      <label>
         E-mail *
      </label>
      <input type="text" name="email" placeholder="E-mail">

      <label type="text" >
         Senha de Acesso *
      </label>
      <input type="text" name="senha" placeholder="Senha">

      <button class="button-form" style="border-style: none; " type="submit">Cadastrar</button>
   </form>

   @if ($errors->has('email') || $errors->has('senha'))
     <span class="">
         <strong>Erro ao cadastrar</strong>
     </span>
   @endif
   </div>
</div>
@stop
