@extends('layout')

@section('content')



<h1 class="titulo-tabela">Estabelecimentos Credenciados</h1>

   <a class="btn cadastro-cred" href="/credenciadas/cadastro">Nova Credenciada</a>

   <table class="table table-success table-striped">
   <thead>
      <tr class="nome-colunas">
         <th scope="col">ID</th>
         <th scope="col">CNPJ</th>
         <th scope="col">Ativo</th>
         <th scope="col" colspan="4">Ações</th>
      </tr>
   </thead>
   <tbody>
      @foreach ($credenciadas as $credenciada)
         <tr scope="row" class="itens">
            <th>{{$credenciada->id}}</th>
            <th>{{$credenciada->cnpj}}</th>
            <th>{{$credenciada->ativo}}</th>
            <th class="dropdown">
               <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  Ações
               </a>

               <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item" href="/credenciadas/{{$credenciada->id}}/info">Visualizar</a></li>
                  <li><a class="dropdown-item" href="/credenciadas/{{$credenciada->id}}">Editar</a></li>
                  <li><a class="dropdown-item" href="">Mudar senha</a></li>
                  <li>               
                     <form action="/credenciadas/status" method="post">
                     @csrf
                     <input hidden name="id" value="{{$credenciada->id}}">
                     @if($credenciada->ativo == true)
                        <button class="dropdown-item" type="submit">Desativar</button>
                     @elseif($credenciada->ativo == false)
                        <button class="dropdown-item" type="submit">Ativar</button>
                     @endif
                  </form>
                  </li>
               </ul>

            </th>
         </tr>
      @endforeach
      </tbody>
   </table>

@stop

