@extends('layout')

@section('content')
<div style="display: flex;justify-content:center; margin-top: 5vh;">
   <a class="btn cadastro-cred" href="{{action('FuncionarioController@create')}}">Novo Funcionário</a>
</div>

   <table class="table">
      <thead>
         <tr class="nome-colunas">
            <h1 class="titulo-tabela-cred">Funcionarios Cadastrados</h1>
            <th style="padding-left: 20px" scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Status</th>
            <th scope="col" style="text-align: left">Ações</th>
         </tr>
      </thead>
   <tbody>
      @foreach ($funcionarios as $funcionario)
         <tr scope="row" class="itens">
            <th style="padding-left: 20px">{{$funcionario->id}}</th>
            <th>{{$funcionario->nome}}</th>
            @if($funcionario->ativo == true)
               <th>Ativo</th>
            @elseif($funcionario->ativo == false)
               <th>Inativo</th>
            @endif
            <th>
               <a style="font-weight: bold" class="btn" href="/funcionario/{{$funcionario->id}}/info">Ver detalhes</a>
            </th>
         </tr>
      @endforeach
      </tbody>
   </table>

@stop

