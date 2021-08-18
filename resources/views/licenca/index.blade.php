@extends('layout')
@section('content')

   <h1 class="titulo-tabela"></h1>
   <a class="btn cadastro-cred" href="/licencas/cadastro"> Cadastrar Licença</a>
   <table class="table">
   <thead>
      <tr class="nome-colunas">
         <th scope="col">ID</th>
         <th scope="col">CNPJ</th>
         <th scope="col">Ativo</th>
         <th scope="col" style="text-align: center" >Gerenciar</th>
      </tr>
   </thead>
   <tbody>
      @foreach ($licencas as $licenca)
            <tr scope="row" class="itens">
               <th >{{$licenca->id}}</th>
               <th >{{$licenca->cnpj}}</th>
               <th>{{$licenca->ativo}}</th>
               <th style="display:flex;  justify-content:center;"><a style=" font-weight: bold" class="btn" href="/licencas/{{$licenca->id}}">Ver detalhes</a></th>
            </tr>
      @endforeach
      </tbody>
   </table>

    
@endsection