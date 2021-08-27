@extends('layout')
@section('content')
<div style="flex: 1;display: flex;flex-direction: column; justify-content: center; align-items: center;">
   <a style="padding: 2vh; margin-top:2vh" class="btn cadastro-cred" href="/credenciadas">Voltar para Credenciadas</a>

   <div class="container-card-licenca">
      <div class="card card-licenca" >
         <h5 class="card-licenca-title">Dados da Acesso</h5>
         <div class="card-licenca-body card-body">
            <div class="card-licenca-item">
               <h4>Login:</h4> 
               <h5>{{$login}}</h5>
            </div>
            <div class="card-licenca-item">
               <h4>Senha:</h4> 
               <h5>{{$password}}</h5>
            </div>
         </div>
      </div>
   </div>

</div>
@endsection