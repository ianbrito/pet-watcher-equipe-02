@extends('layout')
@section('content')


   <div style="display: flex; flex-direction: row-reverse; margin-top: 5vh">
      <a class="btn cadastro-cred"  href="">Mudar senha</a>
      <a class="btn cadastro-cred" style="margin-right: 10px" href="/credenciadas/{{$credenciada->id}}">Editar</a>
      {{-- @if($credenciada->ativo == true)
         <a class="btn cadastro-cred" href="">Desativar</a>
      @elseif($credenciada->ativo == false)
         <a class="btn cadastro-cred" href="">Ativar</a>
      @endif --}}
      <form action="/credenciadas/status" method="post">
         @csrf
         <input hidden name="id" value="{{$credenciada->id}}">
         @if($credenciada->ativo == true)
            <button style="margin-right: 10px" class="btn cadastro-cred" type="submit">Desativar</button>
         @elseif($credenciada->ativo == false)
            <button style="margin-right: 10px" class="btn cadastro-cred" type="submit">Ativar</button>
         @endif
      </form>
   </div>

   <table class="table" >
      <thead>
         <tr class="nome-colunas">
            <th style="border-top-left-radius: 15px;padding-left: 20px" scope="col">ID</th>
            <th>CNPJ</th>
            <th>Inscrição Estadual</th>
            <th>Razão Social</th>
            <th>Telefone</th>
            <th>Status</th>
            <th>E-mail</th>
            <th style="border-top-right-radius: 15px;" scope="col" style="text-align: center">Endereço</th>
         </tr>
      </thead>
      <tbody>
         <tr scope="row" class="itens">
            <th style="padding-left: 20px">{{$credenciada->id}}</th>
            <th>{{$credenciada->cnpj}}</th>
            <th>{{$credenciada->inscricao_estadual}}</th>
            <th>{{$credenciada->razao_social}}</th>
            <th>{{$credenciada->telefone}}</th>
            <th>{{$credenciada->ativo}}</th>
            <th>{{$credenciada->email}}</th>
            <th>{{$credenciada->endereco}}</th>
         </tr>
      </tbody>
   </table>

@endsection