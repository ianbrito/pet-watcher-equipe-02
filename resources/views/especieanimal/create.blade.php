@extends('layout')

@section('content')

<div style="display: flex; justify-content: center; aling-items: center; margin-top: 5vh">
   <div class="card card-licenca" style="max-width: 40rem; margin-top: 5px;">
      <div class="card-licenca-title">
         Nova Especie
      </div>
      <div class="card-body">
         <form action=" {{action('EspecieAnimalController@store')}} " method="post">
               @csrf
               <label for="descricao">Descricao: </label>
               <input class="form-control" type="text" name="descricao" id="descricao">
               <input style="width: 100%;" class="btn cadastro-cred" type="submit" value="Criar">
         </form>
      </div>
   </div>
</div>
@stop
