@extends('layout')
@section('content')


   <div style="display: flex;justify-content:center; flex-direction: row-reverse; margin-top: 5vh">
      <a class="btn cadastro-cred" style="margin-right: 10px" href="/funcionario/edit/{{$funcionario->id}}">Editar</a>
      <a class="btn cadastro-cred" style="margin-right: 10px" href="/funcionario">Listagem de Funcionários</a>

      <form action="/funcionario/status" method="post">
         @csrf
         <input hidden name="id" value="{{$funcionario->id}}">
         @if($funcionario->ativo == true)
            <button style="margin-right: 10px" class="btn cadastro-cred" type="submit">Desativar</button>
         @elseif($funcionario->ativo == false)
            <button style="margin-right: 10px" class="btn cadastro-cred" type="submit">Ativar</button>
         @endif
      </form>
   </div>

   <div class="container-card-cred">
      <div class="card card-cred" >
         <h5 class="card-cred-title">Dados do<br> Funcionário</h5>
         <div class="card-cred-body card-body">
            
            <div class="card-cred-item">
               <h4>ID</h4>
               <h5>{{$funcionario->id}}</h5>
            </div>

            <div class="card-cred-item">
               <h4>Nome</h4>
               <h5>{{$funcionario->nome}}</h5>
            </div>
            
            <div class="card-cred-item">
               <h4>Credenciada</h4>
               <h5>{{$funcionario->id_credenciada}}</h5>
            </div>

            <div class="card-cred-item">
               <h4>CPF</h4>
               <h5>{{$funcionario->cpf}}</h5>
            </div>

            <div class="card-cred-item">
               <h4>Telefone</h4>
               <h5>{{$funcionario->telefone}}</h5>
            </div>

            <div class="card-cred-item">
               <h4>E-mail</h4>
               <h5>{{$funcionario->email}}</h5>
            </div>

            <div class="card-cred-item">
               <h4>Endereço</h4>
               <h5>{{$funcionario->endereco}}</h5>
            </div>

            <div class="card-cred-item">
               <h4>Status</h4>
               <h5>
                  {{$funcionario->ativo}}
               @if($funcionario->ativo == true)
               (Ativo)
               @elseif($funcionario->ativo == false)
               (Inativo)
               @endif
               </h5>
            </div>

            <div class="card-cred-item">
               <h4>E-mail</h4>
               <h5>{{$funcionario->email}}</h5>
            </div>

            <div class="card-cred-item">
               <h4>Endereço</h4>
               <h5>{{$funcionario->endereco}}</h5>
            </div>

         </div>
      </div>
   </div>
@endsection