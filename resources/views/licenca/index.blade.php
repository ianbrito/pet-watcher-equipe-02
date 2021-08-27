@extends('layout')
@section('content')

<div style="display: flex;justify-content:center; flex-direction: row-reverse; margin-top: 5vh;">
   <a class="btn cadastro-cred" href="/licencas/cadastro"> Cadastrar Licença</a>
   <a style="margin-right: 20px" class="btn cadastro-cred" href="/revog"> Revogar Licença</a>
</div>
   <h1 class="titulo-tabela-cred">Licenças Cadastradas</h1>

   <table class="table">
   <thead>
      <tr class="nome-colunas">
         <th style=";padding-left: 20px" scope="col">ID</th>
         <th scope="col">CNPJ</th>
         <th scope="col">Ativo</th>
         <th scope="col" style="text-align: left">Gerenciar</th>
      </tr>
   </thead>
   <tbody>
      @foreach ($licencas as $licenca)
            <tr scope="row" class="itens">
               <th style="padding-left: 20px"  >{{$licenca->id}}</th>
               <th >{{$licenca->cnpj}}</th>
               <th>{{$licenca->ativo}}</th>
               <th style="display:flex;  justify-content:left;"><a style="text-aling: left; font-weight: bold" class="btn" href="/licencas/{{$licenca->id}}">Ver detalhes</a></th>
            </tr>
      @endforeach
      </tbody>
   </table>

    
@endsection