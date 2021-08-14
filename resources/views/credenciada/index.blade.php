@extends('layout')

@section('content')

<h1 class="display-1">Estabelecimentos Credenciados no Sistema</h1>

   <a class="btn btn-primary" href="/credenciadas/cadastro">Nova Credenciada</a>

   <table class="table table-striped" style="margin-top: 5vh;" >

      <tr>
         <th>ID</th>
         <th>CNPJ</th>
         <th>Inscrição Estadual</th>
         <th>Razão Social</th>
         <th>Telefone</th>
         <th>E-mail</th>
         <th>Endereço</th>
      </tr>

      @foreach ($credenciadas as $credenciada)
         <tr>
            <th>{{$credenciada->id}}</th>
            <th>{{$credenciada->cnpj}}</th>
            <th>{{$credenciada->inscricao_estadual}}</th>
            <th>{{$credenciada->razao_social}}</th>
            <th>{{$credenciada->telefone}}</th>
            <th>{{$credenciada->email}}</th>
            <th>{{$credenciada->endereco}}</th>
            <th><a href="/credenciadas/{{$credenciada->id}}/info">Visualizar</a></th>
            <th><a href="/credenciadas/{{$credenciada->id}}">Editar</a></th>
            <th><a href="">Mudar senha</a></th>
            <th><a href="">Desativar</a></th>
         </tr>
      @endforeach

   </table>

@stop
