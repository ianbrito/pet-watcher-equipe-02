@extends('layout')
@section('content')   

<div class="container-login">
   <h1>Nova Licença</h1>
<section class="login-section">
   <form action="{{action('LicencaController@store')}}" method="post">
      @csrf
      
      <input hidden name="tipo_conta" type="text" value="2">

      <label>
         CNPJ *
         <input type="text" name="cnpj" placeholder="CNPJ" required>
      </label>

      <label type="text" >
         Data Licenciamento *
         <input type="text" name="data_licenciamento" placeholder="Data Licenciamento" required>
      </label>

      <label type="text" >
         Data Vencimento *
         <input type="text" name="data_vencimento" placeholder="Data Vencimento" required>
      </label>

      <button type="submit">Cadastrar</button>
   </form>

   @if ($errors->has('data_licenciamento') || $errors->has('cnpj') || $errors->has('data_vencimento'))
     <span class="">
         <strong>Erro ao cadastrar</strong>
     </span>
   @endif
</section>
</div>
@stop
