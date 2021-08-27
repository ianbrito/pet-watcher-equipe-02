@extends('layout')
@section('content')

<div class="container-login">
   <div class="card card-cred" >

      <div class="card-cred-title" style="display: flex; flex-direction: column; justify-content:center; aling-items:center;">
         <div style="display: flex; justify-content:center; aling-items:center;">
            <img style="width: 60px;" src="{{asset('./pawprints.png')}}" alt="deeeeeee">
         </div>
         <div style="text-align: center;font-size: 30px;">Revogar Licença</div>

      </div>

         <form class="card-body card-cred-body" action="{{action('LicencaController@getLicencas')}}" method="get">
            @csrf
            <label>
               Informe o CNPJ da credenciada para busca das licenças
               *
            </label>
            <input type="text" name="cnpj" placeholder="CNPJ" required>
            <button class="button-form" style="border-style: none;" type="submit">Buscar Licencas</button>
         </form>
   </div>
</div>
@endsection