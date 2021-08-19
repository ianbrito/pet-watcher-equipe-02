@extends('layout')
@section('content')

   <h1 class="titulo-tabela"></h1>
   <a class="btn cadastro-cred" href="/funcionario/cadastro"> Cadastrar Funcionário</a>
   <table class="table">
   <thead>
      <tr class="nome-colunas">
        <th scope="col">ID</th>
         <th scope="col">CPF</th>
         <th scope="col">NOME</th>
         <th scope="col">TELEFONE</th>
         <th scope="col">EMAIL</th>
         <th scope="col">ENDEREÇO</th>
         <th scope="col" style="text-align: center" >Gerenciar</th>
      </tr>
   </thead>
   <tbody>
      @foreach ($funcionarios as $funcionario)
            <tr scope="row" class="itens">
               <th >{{$funcionario->id}}</th>
               <th >{{$funcionario->cpf_f}}</th>
               <th>{{$funcionario->nome_f}}</th>
               <th>{{$funcionario->telefone_f}}</th>
               <th>{{$funcionario->email_f}}</th>
               <th>{{$funcionario->endereco_f}}</th>
               <th style="display:flex;  justify-content:center;"><a style=" font-weight: bold" class="btn" href="/funcionario/{{$funcionario->id}}">Ver detalhes</a></th>
            </tr>
      @endforeach
      </tbody>
   </table>


@endsection
