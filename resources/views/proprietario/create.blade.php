@extends('layout')

@section('content')
<div class="container-login">
   <h1>Cadastro de Proprietário</h1>
<section class="login-section">
   <form action="{{action('ProprietarioController@store')}}" method="post">
      @csrf

      <label>
         CPF ou CNPJ*
         <input type="text" name="identificador" placeholder="CPF ou CNPJ">
      </label>

      <label type="text" >
         Tipo Pessoa *
         <input type="text" name="tipo_pessoa" placeholder="Tipo Pessoa">
      </label>

      <label type="text" >
         Nome*
         <input type="text" name="nome" placeholder="Nome">
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

   @if ($errors->has('email') || $errors->has('identificador'))
     <span class="">
         <strong>Erro ao cadastrar</strong>
     </span>
   @endif
</section>
</div>
@stop
