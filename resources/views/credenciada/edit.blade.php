@extends('layout')

@section('content')
<div class="container-login">
   <h1>Editar Credenciada</h1>
<section class="login-section">
   <form action="{{action('CredenciadaController@update',$credenciada->id)}}" method="post">
      @csrf
      {{ method_field('put') }}
      <label>
         CNPJ *
         <input value="{{$credenciada->cnpj}}" type="text" name="cnpj" placeholder="CNPJ">
      </label>

      <label type="text" >
         Inscrição Estadual *
         <input value="{{$credenciada->inscricao_estadual}}" type="text" name="inscricao_estadual" placeholder="Inscrição Estadual">
      </label>

      <label type="text" >
         Razão Social *
         <input value="{{$credenciada->razao_social}}" type="text" name="razao_social" placeholder="Razão Social">
      </label>

      <label type="text" >
         Telefone *
         <input value="{{$credenciada->telefone}}" type="text" name="telefone" placeholder="Telefone">
      </label>

      <label>
         E-mail *
         <input value="{{$credenciada->email}}" type="text" type="email" name="email" placeholder="E-mail">
      </label>

      <label type="text" >
         Endereço *
         <input value="{{$credenciada->endereco}}" type="text" name="endereco" placeholder="Endereço">
      </label>

      <button type="submit">Salvar Alterações</button>
   </form>

   @if ($errors->has('email') || $errors->has('cnpj'))
     <span class="">
         <strong>Erro ao Editar</strong>
     </span>
   @endif
</section>
</div>
@stop
