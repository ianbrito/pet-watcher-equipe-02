@extends('layout')

@section('content')

<div style="display: flex;justify-content:center; flex-direction: row-reverse; margin-top: 5vh;">
   <a style="margin-left: 10px;" class="btn cadastro-cred" href="{{ action('ProprietarioController@index')}}">Listagem de Proprietários</a>
   <a style="margin-left: 10px;" class="btn cadastro-cred" href="{{ action('ProprietarioController@create')}}">Novo Proprietário</a>
</div>

<h1 class="titulo-tabela-cred">Proprietários</h1>

   <table class="table">
      <thead>
         <tr class="nome-colunas">
            <th style="padding-left: 20px" scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">E-mail</th>
            <th scope="col" style="text-align: left">Ações</th>
         </tr>
      </thead>
   <tbody>
      @foreach ($proprietarios as $proprietario)
         <tr scope="row" class="itens">
            <th style="padding-left: 20px;">{{$proprietario->id}}</th>
            <th>{{$proprietario->nome}}</th>
            <th>{{$proprietario->telefone}}</th>
            <th>{{$proprietario->email}}</th>
            <th>
               <a style="font-weight: bold" class="btn" href="/proprietario/{{$proprietario->id}}/info">Ver detalhes</a>
            </th>
         </tr>
      @endforeach
      </tbody>
   </table>
@stop
