@extends('layout')

@section('content')

<h1
   class="titulo-tabela card text-white mb-3"
   style="background-color: #4649e9;;min-width: 24rem;min-heigth: 10rem; border-radius: 15px;font-size: 2rem; padding: 1vh 1vh"
>Proprietários</h1>

   <div style="display: flex;justify-content:center; flex-direction: row-reverse;">
      <a style="margin-left: 10px;" class="btn cadastro-cred" href="{{ action('ProprietarioController@index')}}">Listagem de Proprietários</a>
      <a style="margin-left: 10px;" class="btn cadastro-cred" href="{{ action('ProprietarioController@create')}}">Novo Proprietário</a>
   </div>

   <table class="table">
      <thead>
         <tr class="nome-colunas">
            <th style="border-top-left-radius: 15px;padding-left: 20px" scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">E-mail</th>
            <th style="border-top-right-radius: 15px;" scope="col" style="text-align: center">Ações</th>
         </tr>
      </thead>
   <tbody>
      @foreach ($proprietarios as $proprietario)
         <tr scope="row" class="itens">
            <th style="padding-left: 20px">{{$proprietario->id}}</th>
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
