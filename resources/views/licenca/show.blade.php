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
   
   <table class="table">
      <thead>
         <tr class="nome-colunas">
            <th style="border-top-left-radius: 15px;padding-left: 20px" scope="col">ID</th>
            <th scope="col">CNPJ</th>
            <th scope="col">Data Licenciamento</th>
            <th scope="col">Data Vencimento</th>
            <th style="border-top-right-radius: 15px;" scope="col">Ativo</th>
         </tr>
      </thead>
      <tbody>
         <tr scope="row" class="itens">
            <th style="padding-left: 20px" >{{$licenca->id}}</th>
            <th>{{$licenca->cnpj}}</th>
            <th>{{$licenca->data_licenciamento->format('d/m/Y')}}</th>
            <th>{{$licenca->data_vencimento->format('d/m/Y')}}</th>
            <th>{{$licenca->ativo}}</th>
         </tr>
      </tbody>
   </table>
@endsection