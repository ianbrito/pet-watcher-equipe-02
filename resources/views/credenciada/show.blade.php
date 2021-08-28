@extends('layout')
@section('content')


   <div style="display: flex;justify-content:center; flex-direction: row-reverse; margin-top: 5vh">
      
      <a class="btn cadastro-cred" style="margin-right: 10px" href="/credenciadas/{{$credenciada->id}}">Editar</a>
      
      {{-- @if($credenciada->ativo == true)
         <a class="btn cadastro-cred" href="">Desativar</a>
      @elseif($credenciada->ativo == false)
         <a class="btn cadastro-cred" href="">Ativar</a>
      @endif --}}
      <form action="/credenciadas/status" method="post">
         @csrf
         <input hidden name="id" value="{{$credenciada->id}}">
         @if($credenciada->ativo == true)
            <button style="margin-right: 10px" class="btn cadastro-cred" type="submit">Desativar</button>
         @elseif($credenciada->ativo == false)
            <button style="margin-right: 10px" class="btn cadastro-cred" type="submit">Ativar</button>
         @endif
      </form>

      <form action="/credenciadas/del" method="post">
         @csrf
         @method('delete')
         <input hidden name="id" value="{{$credenciada->id}}">
         
         <button style="margin-right: 10px" class="btn cadastro-cred" type="submit">Excluir</button>
         
      </form>
   </div>
{{-- <table class="table">
      <thead>
         <tr class="nome-colunas">
            <th style="border-top-left-radius: 15px;padding-left: 20px" scope="col">ID</th>
            <th>CNPJ</th>
            <th>Inscrição Estadual</th>
            <th>Razão Social</th>
            <th>Telefone</th>
            <th>Status</th>
            <th>E-mail</th>
            <th style="border-top-right-radius: 15px;" scope="col" style="text-align: center">Endereço</th>
         </tr>
      </thead>
      <tbody>
         <tr scope="row" class="itens">
            <th style="padding-left: 20px">{{$credenciada->id}}</th>
            <th>{{$credenciada->cnpj}}</th>
            <th>{{$credenciada->inscricao_estadual}}</th>
            <th>{{$credenciada->razao_social}}</th>
            <th>{{$credenciada->telefone}}</th>
            <th>{{$credenciada->ativo}}</th>
            <th>{{$credenciada->email}}</th>
            <th>{{$credenciada->endereco}}</th>
         </tr>
      </tbody>
   </table>  --}}

   <div class="container-card-cred">
      <div class="card card-cred" >
         <h5 class="card-cred-title">Dados da<br> Credenciada</h5>
         <div class="card-cred-body card-body">
            
            <div class="card-cred-item">
               <h4>ID</h4>
               <h5>{{$credenciada->id}}</h5>
            </div>

            <div class="card-cred-item">
               <h4>CNPJ</h4>
               <h5>{{$credenciada->cnpj}}</h5>
            </div>
            
            <div class="card-cred-item">
               <h4>Inscrição Estadual</h4>
               <h5>{{$credenciada->inscricao_estadual}}</h5>
            </div>

            <div class="card-cred-item">
               <h4>Razão Social</h4>
               <h5>{{$credenciada->razao_social}}</h5>
            </div>

            <div class="card-cred-item">
               <h4>Telefone</h4>
               <h5>{{$credenciada->telefone}}</h5>
            </div>

            <div class="card-cred-item">
               <h4>Status</h4>
               <h5>
                  {{$credenciada->ativo}}
               @if($credenciada->ativo == true)
               (Ativo)
               @elseif($credenciada->ativo == false)
               (Inativo)
               @endif
               </h5>
            </div>

            <div class="card-cred-item">
               <h4>E-mail</h4>
               <h5>{{$credenciada->email}}</h5>
            </div>

            <div class="card-cred-item">
               <h4>Endereço</h4>
               <h5>{{$credenciada->endereco}}</h5>
            </div>

         </div>
      </div>
   </div>
@endsection