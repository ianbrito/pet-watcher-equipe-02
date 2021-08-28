@extends('layout')

@section('content')
<div style="display: flex;justify-content:center; margin-top: 5vh;">
   <a class="btn cadastro-cred" href="/credenciadas/cadastro">Nova Credenciada</a>
</div>

   <table class="table">
      <thead>
         <tr class="nome-colunas">
            <h1 class="titulo-tabela-cred">Estabelecimentos Credenciados</h1>
            <th style="padding-left: 20px" scope="col">ID</th>
            <th scope="col">Razão Social</th>
            <th scope="col">Status</th>
            <th scope="col" style="text-align: left">Ações</th>
         </tr>
      </thead>
   <tbody>
      @foreach ($credenciadas as $credenciada)
         <tr scope="row" class="itens">
            <th style="padding-left: 20px">{{$credenciada->id}}</th>
            <th>{{$credenciada->razao_social}}</th>
            @if($credenciada->ativo==true)
               <th>Ativo</th>
            @elseif($credenciada->ativo==false)
               <th>Inativo</th>
            @endif
            <th>
               <a style="font-weight: bold" class="btn" href="/credenciadas/{{$credenciada->id}}/info">Ver detalhes</a>
            </th>
         </tr>
      @endforeach
      </tbody>
   </table>

@stop

