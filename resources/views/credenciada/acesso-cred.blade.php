@extends('layout')
@section('content')
<div style="flex: 1;display: flex;flex-direction: column; justify-content: center; align-items: center;">
   <div class="card" style="width: 20rem; margin-top: 10vh">
      <div class="card-header" style="background-color: #4649e9; color: white; font-weight: bold">
         Dados de Acesso
      </div>
      <div class="card-body">

         <p>
            Login: {{$login}}
         </p>
         <p>
            Senha: {{$password}}
         </p>
      </div>
   </div>
   <a style="padding: 2vh; margin-top:2vh" class="btn cadastro-cred" href="/credenciadas">Voltar para Credenciadas</a>
</div>
@endsection