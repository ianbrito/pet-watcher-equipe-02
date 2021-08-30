@extends('layout')
@section('content')

<div style="display: flex; flex-direction: row-reverse; margin-top:5vh;">
   <a  class="btn cadastro-cred" href="/licencas" > Listar Licenças</a>
</div>
   <h1 class="titulo-tabela-cred">Licencas para Revogação </h1>
   @if(sizeof($licencas) != 0)
   <table class="table">
   <thead>
      <tr class="nome-colunas">
         <th style="padding-left: 20px" scope="col">ID</th>
         <th scope="col">CNPJ</th>
         <th scope="col">Data de Licenciamento</th>
         <th scope="col">Data de Vencimento</th>
         <th scope="col">Ativo</th>
         <th scope="col" style="text-align: left" >Gerenciar</th>
      </tr>
   </thead>
   <tbody>

      
      @foreach ($licencas as $licenca)
            <tr scope="row" class="itens">
               <th style="padding-left: 20px" >{{$licenca->id}}</th>
               <th >{{$licenca->cnpj}}</th>
               <th>{{$licenca->data_licenciamento->format('d/m/Y')}}</th>
               <th>{{$licenca->data_vencimento->format('d/m/Y')}}</th>
               <th>{{$licenca->ativo}}</th> 
               <th>
                  @if($licenca->ativo == true)
                  <form action="{{action('LicencaController@setStatus')}}" method="post">
                     @csrf
                     @method('patch')
                     <input type="text" hidden name="id" value="{{$licenca->id}}">
                     <input type="text" hidden name="cnpj" value="{{$licenca->cnpj}}">
                     <button style="padding: 0;" class="btn">Revogar Licença</button>
                  </form action="{{action('LicencaController@setStatus')}}" method="post">  
                  @elseif($licenca->ativo == false)
                  <form>
                     @csrf
                     @method('patch')
                     <input type="text" hidden name="id" value="{{$licenca->id}}">
                     <input type="text" hidden name="cnpj" value="{{$licenca->cnpj}}">
                     <button style="padding: 0;" disabled class="btn">Licenca Revogada</button>
                  </form>
                  @endif
               </th>
            </tr>
      @endforeach
      @elseif(sizeof($licencas) == 0)
      <div class="erro-container">

         <div class="card text-dark bg-light mb-3" style="min-width: 24rem;min-heigth: 10rem; border-radius: 15px;">
            <h1 style="font-size: 1rem;" class="mensagem">Sem licenças para o <br>CNPJ infomado</h1>
         </div>
         
      </div>
      @endif
      </tbody>
   </table>



    
@endsection