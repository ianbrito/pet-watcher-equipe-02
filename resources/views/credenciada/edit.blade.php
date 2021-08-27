@extends('layout')

@section('content')
<div class="container-login">
   <div class="card card-cred">
      <div class="card-cred-title" style="display: flex; flex-direction: column; justify-content:center; aling-items:center;">
         <div style="display: flex; justify-content:center; aling-items:center;">
            <img style="width: 60px;" src="{{asset('./pawprints.png')}}" alt="deeeeeee">
         </div>
         <div style="text-align: center;font-size: 30px;">Editar Credenciada</div>
      </div>


   <form class="card-body card-cred-body" action="{{action('CredenciadaController@update',$credenciada->id)}}" method="post">
      @csrf
      {{ method_field('put') }}
      <label>
         CNPJ *
      </label>
      <input value="{{$credenciada->cnpj}}" type="text" name="cnpj" placeholder="CNPJ">

      <label type="text" >
         Inscrição Estadual *
      </label>
      <input value="{{$credenciada->inscricao_estadual}}" type="text" name="inscricao_estadual" placeholder="Inscrição Estadual">

      <label type="text" >
         Razão Social *
      </label>
      <input value="{{$credenciada->razao_social}}" type="text" name="razao_social" placeholder="Razão Social">

      <label type="text" >
         Telefone *
      </label>
      <input value="{{$credenciada->telefone}}" type="text" name="telefone" placeholder="Telefone">

      <label>
         E-mail *
      </label>
      <input value="{{$credenciada->email}}" type="text" type="email" name="email" placeholder="E-mail">

      <label type="text" >
         Endereço *
      </label>
      <input value="{{$credenciada->endereco}}" type="text" name="endereco" placeholder="Endereço">

      <button class="button-form" style="border-style: none; " type="submit">Salvar Alterações</button>
   </form>

   @if ($errors->has('email') || $errors->has('cnpj'))
     <span class="">
         <strong>Erro ao Editar</strong>
     </span>
   @endif

   </div>
</div>
@stop
