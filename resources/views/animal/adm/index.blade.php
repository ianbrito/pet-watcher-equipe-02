@extends('layout')

@section('content')

<h1
   class="titulo-tabela card text-white mb-3"
   style="background-color: #4649e9;;min-width: 24rem;min-heigth: 10rem; border-radius: 15px;font-size: 2rem; padding: 1vh 1vh"
>Animais</h1>

   <div style="display: flex;justify-content:center; flex-direction: row-reverse;">
      <a style="margin-left: 10px;" class="btn cadastro-cred" href="{{ action('AnimalController@index')}}">Listagem de Animais</a>
      <a style="margin-left: 10px;" class="btn cadastro-cred" href="{{ action('AnimalController@create')}}">Novo Animal</a>
   </div>

   <table class="table">
      <thead>
         <tr class="nome-colunas">
            <th style="border-top-left-radius: 15px;padding-left: 20px" scope="col">ID</th>
            <th scope="col">Tipo de Aquisicao</th>
            <th scope="col">Microship</th>
            <th scope="col">Pedigree</th>
            <th style="border-top-right-radius: 15px;" scope="col" style="text-align: center">Ações</th>
         </tr>
      </thead>
   <tbody>
      @foreach ($animais as $animal)
         <tr scope="row" class="itens">
            <th style="padding-left: 20px">{{$animal->id}}</th>
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
