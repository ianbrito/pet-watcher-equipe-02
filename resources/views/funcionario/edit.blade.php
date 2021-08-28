@extends('layout')

@section('content')
<div class="container-login">
   <div class="card card-cred">
      <div class="card-cred-title" style="display: flex; flex-direction: column; justify-content:center; aling-items:center;">
         <div style="display: flex; justify-content:center; aling-items:center;">
            <img style="width: 60px;" src="{{asset('./pawprints.png')}}" alt="deeeeeee">
         </div>
         <div style="text-align: center;font-size: 30px;">Editar Funcionário</div>
      </div>


      <form class="card-body card-cred-body" action="/funcionario/{{$funcionario->id}}" method="post">
         @csrf
         @method('put')
         <input hidden name="tipo_conta" type="text" value="2">

         <label type="text" >
            Nome *
         </label>
         <input type="text" name="nome" placeholder="Nome" value="{{$funcionario->nome}}">

         <label>
            CPF *
         </label>
         <input type="text" name="cpf" placeholder="CPF" value="{{$funcionario->cpf}}">

         <label type="text" >
            Credenciada *
         </label>
         <input type="number" name="id_credenciada" placeholder="ID da Credenciada" value="{{$funcionario->id_credenciada}}">


         <label type="text" >
            Telefone *
         </label>
         <input type="text" name="telefone" placeholder="Telefone" value="{{$funcionario->telefone}}">

         <label>
            E-mail *
         </label>
         <input type="text" type="email" name="email" placeholder="E-mail" value="{{$funcionario->email}}">

         <label type="text" >
            Endereço *
         </label>
         <input type="text" name="endereco" placeholder="Endereço" value="{{$funcionario->endereco}}">

         <button style="border-style: none;" class="button-form" type="submit">Salvar Alterações</button>
      </form>

   @if ($errors->has('email') || $errors->has('cnpj'))
     <span class="">
         <strong>Erro ao Editar</strong>
     </span>
   @endif

   </div>
</div>
@stop
