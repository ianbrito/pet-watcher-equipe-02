@extends('layout')
@section('content')

   <h1 class="titulo-tabela card text-white mb-3" style="background-color: #4649e9;;min-width: 24rem;min-heigth: 10rem; border-radius: 15px;font-size: 2rem; padding: 1vh 1vh" >Licencas para Revogação </h1>
   <div style="display: flex; flex-direction: row-reverse;">
      <a  class="btn cadastro-cred" href="/licencas" > Listar Licenças</a>
   </div>
   @if(sizeof($licencas) != 0)
   <table class="table">
   <thead>
      <tr class="nome-colunas">
         <th style="border-top-left-radius: 15px;padding-left: 20px" scope="col">ID</th>
         <th style="padding: 10px 10px" scope="col">CNPJ</th>
         <th scope="col">Data de Licenciamento</th>
         <th scope="col">Data de Vencimento</th>
         <th scope="col">Ativo</th>
         <th style="border-top-right-radius: 15px;" scope="col" style="text-align: center" >Gerenciar</th>
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
                  </form>  
                  @elseif($licenca->ativo == false)
                  <form action="{{action('LicencaController@setStatus')}}" method="post">
                     @csrf
                     @method('patch')
                     <input type="text" hidden name="id" value="{{$licenca->id}}">
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