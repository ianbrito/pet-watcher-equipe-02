@extends('layout')

@section('content')
<div class="container-login">

   <div class="card card-cred">
      <div class="card-cred-title" style="display: flex; flex-direction: column; justify-content:center; aling-items:center;">
         <div style="display: flex; justify-content:center; aling-items:center;">
            <img style="width: 60px;" src="{{asset('./pawprints.png')}}" alt="deeeeeee">
         </div>
         <div style="text-align: center;font-size: 30px;">Editar Proprietário</div>
      </div>

   <form class="card-body card-cred-body" action="{{action('ProprietarioController@update',$proprietario->id)}}" method="post">
      @csrf
      {{ method_field('put') }}
      <label>
          CPF ou CNPJ*
         </label>
         <input value="{{$proprietario->identificador}}" type="text" name="identificador" placeholder="CPF ou CNPJ">

      <label type="text">
         Tipo Pessoa *
      </label>
      <input value="{{$proprietario->tipo_pessoa}}" type="text" name="tipo_pessoa" placeholder="Tipo Pessoa">

      <label type="text">
        Nome *
      </label>
      <input value="{{$proprietario->nome}}" type="text" name="nome" placeholder="Nome">

      <label type="text">
         Telefone *
      </label>
      <input value="{{$proprietario->telefone}}" type="text" name="telefone" placeholder="Telefone">

      <label>
         E-mail *
      </label>
      <input value="{{$proprietario->email}}" type="text" type="email" name="email" placeholder="E-mail">

      <label type="text">
         Endereço *
      </label>
      <input value="{{$proprietario->endereco}}" type="text" name="endereco" placeholder="Endereço">

      <button class="button-form" style="border: hidden" type="submit">Salvar Alterações</button>
   </form>

   @if ($errors->has('email') || $errors->has('identificador'))
     <span class="">
         <strong>Erro ao Editar</strong>
     </span>
   @endif
</div>
</div>
@stop
