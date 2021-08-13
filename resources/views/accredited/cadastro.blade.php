@extends('layout')

@section('content')
<div class="container-login">
   <h1>Cadastro de Credenciada</h1>
<section class="login-section">
   <form action="" method="post">
      @csrf

      <label>
         CNPJ *
         <input type="text" name="cnpj" placeholder="CNPJ">
      </label>

      <label type="text" >
         Inscrição Estadual *
         <input type="text" name="inscricao-estadual" placeholder="Inscrição Estadual">
      </label>

      <label type="text" >
         Razão Social *
         <input type="text" name="razao-social" placeholder="Razão Social">
      </label>

      <label type="text" >
         Telefone *
         <input type="text" name="telefone" placeholder="Telefone">
      </label>

      <label>
         E-mail *
         <input type="text" type="email" name="email" placeholder="E-mail">
      </label>

      <label type="text" >
         Endereço *
         <input type="text" name="endereco" placeholder="Endereço">
      </label>

      <button type="submit">Cadastrar</button>
   </form>

   @if ($errors->has('email') || $errors->has('password'))
     <span class="">
         <strong>Erro ao cadastrar</strong>
     </span>
   @endif
</section>
</div>
@stop
