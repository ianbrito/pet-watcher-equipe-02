@extends('layout')
@section('content')
   <h1 class="titulo-tabela"></h1>    

   <table class="table">
      <thead>
         <tr class="nome-colunas">
            <th scope="col">ID</th>
            <th scope="col">CNPJ</th>
            <th scope="col">Data Licenciamento</th>
            <th scope="col">Data Vencimento</th>
            <th scope="col">Ativo</th>
         </tr>
      </thead>
      <tbody>
         <tr scope="row" class="itens">
            <th>{{$licenca->id}}</th>
            <th>{{$licenca->cnpj}}</th>
            <th>{{$licenca->data_licenciamento}}</th>
            <th>{{$licenca->data_vencimento}}</th>
            <th>{{$licenca->ativo}}</th>
         </tr>
      </tbody>
   </table>

   <div style="display: flex; flex-direction: row-reverse"  class="container">
      <form action="/licencas/{{$licenca->id}}" method="post">
         @csrf
         @method('put')
         <input type="text" hidden name="id" value="{{$licenca->id}}">
         <button class="btn">Editar</button>
      </form>

      @if($licenca->ativo == true)
      <form action="{{action('LicencaController@setStatus')}}" method="post">
         @csrf
         @method('patch')
         <input type="text" hidden name="id" value="{{$licenca->id}}">
         <button class="btn">Desativar</button>
      </form>  
      @elseif($licenca->ativo == false)
      <form action="{{action('LicencaController@setStatus')}}" method="post">
         @csrf
         @method('patch')
         <input type="text" hidden name="id" value="{{$licenca->id}}">
         <button class="btn">Ativar</button>
      </form>
      @endif
   </div>




@endsection