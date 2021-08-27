@extends('layout')

@section('content')
   <div style="display: flex;justify-content:center; flex-direction: row-reverse;margin-top: 5vh;">
      <a class="btn cadastro-cred" href="especieanimal/create">Cadastrar Espécie</a>
   </div>

   <table class="table">
      <thead>
         <tr class="nome-colunas">
            <h1 class="titulo-tabela-cred">Espécies Cadastradas</h1>
            <th style="padding-left: 20px" scope="col">ID</th>
            <th  scope="col" style="text-align: center" colspan="4">Descrição</th>
         </tr>
      </thead>
      <tbody>
         @foreach($especieAnimal as $tipo)
         <tr scope="row" class="itens">
               <th style="padding-left: 20px">{{$tipo->id}}</th>
               <th> {{$tipo->descricao}}</th>
               <th> <a style="font-weight: bold" class="btn" href="/especieanimal/{{$tipo->id}}">Ver Detalhes </a></th>
         </tr>
         @endforeach
      </tbody>
   </table>

@stop
