@extends('layout')

@section('content')

<div style="display: flex;justify-content:center; flex-direction: row-reverse; margin-top: 5vh;">
   <a style="margin-left: 10px;" class="btn cadastro-cred" href="{{ action('AnimalController@index')}}">Listagem de Animais</a>
   <a style="margin-left: 10px;" class="btn cadastro-cred" href="{{ action('AnimalController@create')}}">Novo Animal</a>
</div>
   <h1 class="titulo-tabela-cred">Animais</h1>


   <table class="table">
      <thead>
         <tr class="nome-colunas">
            <th style="padding-left: 20px" scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Tipo de Aquisicao</th>
            <th scope="col">Microship</th>
            <th scope="col">Pedigree</th>
            <th  scope="col" style="text-align: center">Ações</th>
         </tr>
      </thead>
   <tbody>
      @foreach ($animais as $animal)
         <tr scope="row" class="itens">
            <th style="padding-left: 20px">{{$animal->id}}</th>
            <th>{{$animal->nome}}</th>
            <th>{{$animal->tipo_aquisicao}}</th>
            <th>{{$animal->microship}}</th>
            <th>{{$animal->pedigree}}</th>
            <th>
               <a style="font-weight: bold" class="btn" href="/animal/{{$animal->id}}/info">Ver detalhes</a>
            </th>
         </tr>
      @endforeach
      </tbody>
   </table>
@stop
