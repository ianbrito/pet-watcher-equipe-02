@extends('layout')
@section('content')
   <h1 class="titulo-tabela"></h1>    

   <div style="display: flex; flex-direction: row-reverse"  class="container">
      
      <form action="/licencas/{{$licenca->id}}" method="post">
         @csrf
         @method('put')
         <input type="text" hidden name="id" value="{{$licenca->id}}">
         <button class="btn cadastro-cred">Editar</button>
      </form>

      <a style="margin-right: 20px" class="btn cadastro-cred" href="/licencas">Listar Licencas</a>
   </div>


   <div class="container-card-licenca">
      <div class="card card-licenca" >
         <h5 class="card-licenca-title">Dados da Licença</h5>
         <div class="card-licenca-body card-body">
            
            <div class="card-licenca-item">
               <h4>ID</h4>
               <h5>{{$licenca->id}}</h5>
            </div>

            <div class="card-licenca-item">
               <h4>CNPJ</h4>
               <h5>{{$licenca->cnpj}}</h5>
            </div>

            <div class="card-licenca-item">
               <h4>Data de Licenciamento</h4>
               <h5>{{$licenca->data_licenciamento}}</h5>
            </div>

            <div class="card-licenca-item">
               <h4>Data de Vencimento</h4>
               <h5>{{$licenca->data_vencimento}}</h5>
            </div>

            <div class="card-licenca-item">
               <h4>Status</h4>
               <h5>
                  {{$licenca->ativo}}
               @if($licenca->ativo == true)
               (Ativo)
               @elseif($licenca->ativo == false)
               (Inativo)
               @endif
               </h5>
            </div>


         </div>
      </div>
   </div>

@endsection