@extends('layout')

@section('content')
<div class="container-login">
   <div class="card card-cred">

      <div class="card-cred-title" style="display: flex; flex-direction: column; justify-content:center; aling-items:center;">
         <div style="display: flex; justify-content:center; aling-items:center;">
            <img style="width: 60px;" src="{{asset('./pawprints.png')}}" alt="deeeeeee">
         </div>
         <div style="text-align: center;font-size: 30px;">Novo Funcionário</div>
      </div>

      <form class="card-body card-cred-body" action="/funcionario/store" method="post">
         @csrf
         
         <input hidden name="tipo_conta" type="text" value="2">

         <label type="text" >
            Nome *
         </label>
         <input type="text" name="nome" placeholder="Nome">

         <label>
            CPF *
         </label>
         <input type="text" name="cpf" placeholder="CPF">

         <label type="text" >
            CNPJ da Credenciada *
         </label>
         <input type="text" name="cnpj" placeholder="CNPJ da Credenciada">


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
