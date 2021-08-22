@extends('layout')

@section('content')

<h1 
   class="titulo-tabela card text-white mb-3" 
   style="background-color: #4649e9;;min-width: 24rem;min-heigth: 10rem; border-radius: 15px;font-size: 2rem; padding: 1vh 1vh" 
>Credenciadas</h1>

   <div style="display: flex; flex-direction: row-reverse;">
      <a class="btn cadastro-cred" href="/credenciadas/cadastro">Nova Credenciada</a>
   </div>

   <table class="table">
      <thead>
         <tr class="nome-colunas">
            <th style="border-top-left-radius: 15px;padding-left: 20px" scope="col">ID</th>
            <th scope="col">Razão Social</th>
            <th scope="col">Ativo</th>
            <th style="border-top-right-radius: 15px;" scope="col" style="text-align: center">Ações</th>
         </tr>
      </thead>
   <tbody>
      @foreach ($credenciadas as $credenciada)
         <tr scope="row" class="itens">
            <th style="padding-left: 20px">{{$credenciada->id}}</th>
            <th>{{$credenciada->razao_social}}</th>
            <th>{{$credenciada->ativo}}</th>
            <th>
               <a style="font-weight: bold" class="btn" href="/credenciadas/{{$credenciada->id}}/info">Ver detalhes</a>
            </th>
         </tr>
      @endforeach
      </tbody>
   </table>

@stop

