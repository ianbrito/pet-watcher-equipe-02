@extends('layout')
@section('content')
   <h1 class="titulo-tabela"></h1>

   <table class="table">
      <thead>
         <tr class="nome-colunas">
            <th scope="col">ID</th>
            <th scope="col">CPF</th>
            <th scope="col">NOME</th>
            <th scope="col">TELEFONE</th>
            <th scope="col">EMAIL</th>
            <th scope="col">ENDEREÇO</th>
         </tr>
      </thead>
      <tbody>
         <tr scope="row" class="itens">
            <th>{{$funcionario->id}}</th>
            <th>{{$funcionario->cpf_f}}</th>
            <th>{{$funcionario->nome_f}}</th>
            <th>{{$funcionario->telefone_f}}</th>
            <th>{{$funcionario->email_f}}</th>
            <th>{{$funcionario->endereco_f}}</th>
         </tr>
      </tbody>
   </table>

   <div style="display: flex; flex-direction: row-reverse"  class="container">
      <form action="/funcionario/edit/{{$funcionario}}" method="post">
         @csrf
         @method('put')
         <input type="text" hidden name="id" value="{{$funcionario->id}}">
         <button class="btn">Editar</button>
      </form>
   </div>




@endsection
