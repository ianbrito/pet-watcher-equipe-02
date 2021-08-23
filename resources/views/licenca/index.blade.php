@extends('layout')
@section('content')

   <h1 class="titulo-tabela card text-white mb-3" style="background-color: #4649e9;;min-width: 24rem;min-heigth: 10rem; border-radius: 15px;font-size: 2rem; padding: 1vh 1vh" >Licenças Cadastradas</h1>
   <div style="display: flex;justify-content:center; flex-direction: row-reverse;">
      <a class="btn cadastro-cred" href="/licencas/cadastro"> Cadastrar Licença</a>
      <a style="margin-right: 20px" class="btn cadastro-cred" href="/revog"> Revogar Licença</a>
   </div>

   <table class="table">
   <thead>
      <tr class="nome-colunas">
         <th style="border-top-left-radius: 15px;padding-left: 20px" scope="col">ID</th>
         <th scope="col">CNPJ</th>
         <th scope="col">Ativo</th>
         <th style="border-top-right-radius: 15px;" scope="col" style="text-align: center">Gerenciar</th>
      </tr>
   </thead>
   <tbody>
      @foreach ($licencas as $licenca)
            <tr scope="row" class="itens">
               <th style="padding-left: 20px"  >{{$licenca->id}}</th>
               <th >{{$licenca->cnpj}}</th>
               <th>{{$licenca->ativo}}</th>
               <th style="display:flex;  justify-content:left;"><a style="text-aling: left; font-weight: bold" class="btn" href="/licencas/{{$licenca->id}}">Ver detalhes</a></th>
            </tr>
      @endforeach
      </tbody>
   </table>

    
@endsection