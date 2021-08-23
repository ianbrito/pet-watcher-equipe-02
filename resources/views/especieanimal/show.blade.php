@extends('layout')

@section('content')

<div style="display: flex; justify-content:center; flex-direction: row-reverse;margin-top: 5vh;">
   <a style="margin-left: 10px;" class="btn cadastro-cred" href="{{ action('EspecieAnimalController@index')}}">Listagem de Espécies</a>
   <a style="margin-left: 10px;" class="btn cadastro-cred" href="/especieanimal/edit/{{$especie_animal->id}}">Editar</a>

   <form action=" {{action('EspecieAnimalController@destroy', $especie_animal->id)}} " method="post" onsubmit="return confirm('tem certeza ?')">
      @csrf
      {{method_field('delete')}}
      <button class="btn cadastro-cred" type="submit" value="deletar">Excluir</button>
   </form>
</div>

<div class="container-card-cred" style="margin-top: 5vh;">
   <div class=" card card-cred" >

      <h5 class="card-cred-title">Dados da Espécie</h5>
      <div class="card-cred-body card-body">
         <div class="card-body">
            
            <div class="card-cred-item">
               <h4>ID</h4>
               <h5>{{$especie_animal->id}}</h5>
            </div>

            <div class="card-cred-item">
               <h4>Descrição</h4>
               <h5>{{$especie_animal->descricao}}</h5>
            </div>
         </div>
      <div>
   </div>
</div>
@stop
