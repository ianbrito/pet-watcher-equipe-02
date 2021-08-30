@extends('layout')
@section('content')

   <div style="display: flex;justify-content:center; flex-direction: row-reverse; margin-top: 5vh">
      <a class="btn cadastro-cred" style="margin-right: 10px" href="/proprietario/edit/{{$proprietario->id}}">Editar</a>
      <a class="btn cadastro-cred" style="margin-right: 10px" href="/proprietario">Lista de Proprietários</a>
   </div>
{{-- <table class="table">
      <thead>
         <tr class="nome-colunas">
            <th style="border-top-left-radius: 15px;padding-left: 20px" scope="col">ID</th>
            <th>CNPJ</th>
            <th>Tipo Pessoa</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Status</th>
            <th>E-mail</th>
            <th style="border-top-right-radius: 15px;" scope="col" style="text-align: center">Endereço</th>
         </tr>
      </thead>
      <tbody>
         <tr scope="row" class="itens">
            <th style="padding-left: 20px">{{$proprietario->id}}</th>
            <th>{{$proprietario->identificador}}</th>
            <th>{{$proprietario->tipo_pessoa}}</th>
            <th>{{$proprietario->nome}}</th>
            <th>{{$proprietario->telefone}}</th>
            <th>{{$proprietario->email}}</th>
            <th>{{$proprietario->endereco}}</th>
         </tr>
      </tbody>
   </table>  --}}

   <div class="container-card-cred">
      <div class="card card-cred" >
         <h5 class="card-cred-title">Dados do<br> proprietario</h5>
         <div class="card-cred-body card-body">

            <div class="card-cred-item">
               <h4>ID</h4>
               <h5>{{$proprietario->id}}</h5>
            </div>

            <div class="card-cred-item">
               <h4>Identificador</h4>
               <h5>{{$proprietario->identificador}}</h5>
            </div>

            <div class="card-cred-item">
               <h4>Tipo Pessoa</h4>
               <h5>{{$proprietario->tipo_pessoa}}</h5>
            </div>

            <div class="card-cred-item">
               <h4>Nome</h4>
               <h5>{{$proprietario->nome}}</h5>
            </div>

            <div class="card-cred-item">
               <h4>Telefone</h4>
               <h5>{{$proprietario->telefone}}</h5>
            </div>

            <div class="card-cred-item">
               <h4>E-mail</h4>
               <h5>{{$proprietario->email}}</h5>
            </div>

            <div class="card-cred-item">
               <h4>Endereço</h4>
               <h5>{{$proprietario->endereco}}</h5>
            </div>

         </div>
      </div>
   </div>
@endsection
