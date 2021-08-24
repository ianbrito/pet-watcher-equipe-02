@extends('layout')

@section('content')
<div class="container-login">
   <h1>Editar Credenciada</h1>
<section class="login-section">
   <form action="{{action('ProprietarioController@update',$proprietario->id)}}" method="post">
      @csrf
      {{ method_field('put') }}
      <label>
          CPF ou CNPJ*
         <input value="{{$proprietario->identificador}}" type="text" name="identificador" placeholder="CPF ou CNPJ">
      </label>

      <label type="text">
         Tipo Pessoa *
         <input value="{{$proprietario->tipo_pessoa}}" type="text" name="tipo_pessoa" placeholder="Tipo Pessoa">
      </label>

      <label type="text">
        Nome *
         <input value="{{$proprietario->nome}}" type="text" name="nome" placeholder="Nome">
      </label>

      <label type="text">
         Telefone *
         <input value="{{$proprietario->telefone}}" type="text" name="telefone" placeholder="Telefone">
      </label>

      <label>
         E-mail *
         <input value="{{$proprietario->email}}" type="text" type="email" name="email" placeholder="E-mail">
      </label>

      <label type="text">
         Endereço *
         <input value="{{$proprietario->endereco}}" type="text" name="endereco" placeholder="Endereço">
      </label>

      <button type="submit">Salvar Alterações</button>
   </form>

   @if ($errors->has('email') || $errors->has('identificador'))
     <span class="">
         <strong>Erro ao Editar</strong>
     </span>
   @endif
</section>
</div>
@stop
