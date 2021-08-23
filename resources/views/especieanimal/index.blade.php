@extends('layout')

@section('content')

<div style="display: flex;justify-content:center; flex-direction: row-reverse;margin-top: 5vh;">
   <a class="btn cadastro-cred" href="especieanimal/create">Cadastrar Espécie</a>
</div>
<div style="display: flex; justify-content: center;">
   <table class="table" style="max-width: 40rem;">
      <thead>
         <tr class="nome-colunas">
               <th style="border-top-left-radius: 15px;padding-left: 20px" scope="col">ID</th>
               <th style="border-top-right-radius: 15px;" scope="col" style="text-align: center" colspan="4">Descrição</th>
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
</div>
@stop
