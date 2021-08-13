@extends('layout')

@section('content')

   <table>

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
         </tr>
      @endforeach

   </table>

@stop
