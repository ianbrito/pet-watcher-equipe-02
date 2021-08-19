@extends('layout')
@section('content')   

<div class="container-login">
   <h1>Editar Licença</h1>
<section class="login-section">
   <form action="{{action('LicencaController@update',$licenca->id)}}" method="post">
      @csrf
      @method('put')
      <input hidden name="tipo_conta" type="text" value="2">

      <label>
         CNPJ *
         <input type="text" value="{{$licenca->cnpj}}" name="cnpj" placeholder="CNPJ" required>
      </label>

      <label type="text" >
         Data Licenciamento *
         <input type="date" value="{{$licenca->data_licenciamento->format('Y-m-d')}}" name="data_licenciamento" placeholder="Data Licenciamento" required>
      </label>

      <label type="text" >
         Data Vencimento *
         <input type="date" value="{{$licenca->data_vencimento->format('Y-m-d')}}" name="data_vencimento" placeholder="Data Vencimento" required>
      </label>

      <button type="submit">Editar</button>
   </form>

   @if ($errors->has('data_licenciamento') || $errors->has('cnpj') || $errors->has('data_vencimento'))
     <span class="">
         <strong>Erro ao editar</strong>
     </span>
   @endif
</section>
</div>
@stop