@extends('layout')

@section('content')
<div class="container-login">
   <div class="card card-cred">

      <div class="card-cred-title" style="display: flex; flex-direction: column; justify-content:center; aling-items:center;">
         <div style="display: flex; justify-content:center; aling-items:center;">
            <img style="width: 60px;" src="{{asset('./pawprints.png')}}" alt="deeeeeee">
         </div>
         <div style="text-align: center;font-size: 30px;">Nova Credenciada</div>
      </div>

      <form class="card-body card-cred-body" action="{{action('CredenciadaController@store')}}" method="post">
         @csrf
         
         <input hidden name="tipo_conta" type="text" value="2">

         <label>
            CNPJ *
         </label>
         <input type="text" name="cnpj" placeholder="CNPJ">

         <label type="text" >
            Inscrição Estadual *
         </label>
         <input type="text" name="inscricao_estadual" placeholder="Inscrição Estadual">

         <label type="text" >
            Razão Social *
         </label>
         <input type="text" name="razao_social" placeholder="Razão Social">

         <label type="text" >
            Telefone *
         </label>
         <input type="text" name="telefone" placeholder="Telefone">

         <label>
            E-mail *
         </label>
         <input type="text" type="email" name="email" placeholder="E-mail">

         <label type="text" >
            Endereço *
         </label>
         <input type="text" name="endereco" placeholder="Endereço">

         <button style="border-style: none;" class="button-form" type="submit">Cadastrar</button>
      </form>

      @if ($errors->has('email') || $errors->has('cnpj'))
      <span class="">
            <strong>Erro ao cadastrar</strong>
      </span>
      @endif
   </div>
</div>
@stop
