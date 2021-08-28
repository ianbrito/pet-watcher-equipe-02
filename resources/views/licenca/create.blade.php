@extends('layout')
@section('content')   

<div class="container-login">
   <div class="card card-cred">

      <div class="card-cred-title" style="display: flex; flex-direction: column; justify-content:center; aling-items:center;">
         <div style="display: flex; justify-content:center; aling-items:center;">
            <img style="width: 60px;" src="{{asset('./pawprints.png')}}" alt="deeeeeee">
         </div>
         <div style="text-align: center;font-size: 30px;">Nova Licença</div>
      </div>
   <form class="card-body card-cred-body" action="{{action('LicencaController@store')}}" method="post">
      @csrf
      
      <input hidden name="tipo_conta" type="text" value="2">

      <label>
         CNPJ da Credenciada *
      </label>
      <input type="text" name="cnpj" placeholder="CNPJ" required>

      <label type="text" >
         Data Licenciamento *
      </label>
      <input type="date" name="data_licenciamento" placeholder="Data Licenciamento" required>

      <label type="text" >
         Data Vencimento *
      </label>
      <input type="date" name="data_vencimento" placeholder="Data Vencimento" required>

      <button class="button-form" style="border-style: none;" type="submit">Cadastrar</button>
   </form>

   @if ($errors->has('data_licenciamento') || $errors->has('cnpj') || $errors->has('data_vencimento'))
     <span class="">
         <strong>Erro ao cadastrar</strong>
     </span>
   @endif

</div>
@stop
