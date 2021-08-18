@extends('layout')

@section('content')
<div class="container-login">
   <h1>Cadastro de Usuário</h1>
<section class="login-section">
   <form action="{{action('UserController@store')}}" method="post">
      @csrf

      <label>
         Tipo de Conta *
         <input type="text" name="tipo_conta" placeholder="Tipo de Conta" required>
      </label>

      <label>
         Login de Acesso *
         <input type="text" name="login" placeholder="Login" required>
      </label>

      <label>
         Nome *
         <input type="text" name="nome" placeholder="Nome">
      </label>

      <label>
         E-mail *
         <input type="text" name="email" placeholder="E-mail">
      </label>

      <label type="text" >
         Senha de Acesso *
         <input type="text" name="senha" placeholder="Senha">
      </label>

      <button type="submit">Cadastrar</button>
   </form>

   @if ($errors->has('email') || $errors->has('senha'))
     <span class="">
         <strong>Erro ao cadastrar</strong>
     </span>
   @endif
</section>
</div>
@stop
