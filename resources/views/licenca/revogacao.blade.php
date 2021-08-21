@extends('layout')
@section('content')

<div class="container-login">
   <h1>Formulario de Revogaçao</h1>
      <section class="login-section">
         <form action="{{action('LicencaController@getLicencas')}}" method="get">
            @csrf
            <label>
               CNPJ *
               <input type="text" name="cnpj" placeholder="CNPJ" required>
            </label>
            <button class="btn login-button" type="submit">Buscar Licencas</button>
         </form>
      </section>
   </div>
@endsection