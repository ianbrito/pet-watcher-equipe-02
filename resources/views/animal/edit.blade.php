@extends('layout')

@section('content')
<div class="container-login">
   <div class="card card-cred">

      <div class="card-cred-title" style="display: flex; flex-direction: column; justify-content:center; aling-items:center;">
         <div style="display: flex; justify-content:center; aling-items:center;">
            <img style="width: 60px;" src="{{asset('./pawprints.png')}}" alt="deeeeeee">
         </div>
         <div style="text-align: center;font-size: 30px;">Editar Animal</div>
      </div>

   <form class="card-body card-cred-body" action="{{action('AnimalController@update',$animal->id)}}" method="post">
      @csrf
      {{ method_field('put') }}
      <label>
          Tipo Aquisição*
         </label>
         <input value="{{$animal->tipo_aquisicao}}" type="text" name="tipo_aquisicao" placeholder="Tipo Aquisição">

      <label type="text">
        Microship *
      </label>
      <input value="{{$animal->microship}}" type="text" name="microship" placeholder="Microship">

      <label type="text">
        Pedigree *
      </label>
      <input value="{{$animal->pedigree}}" type="text" name="pedigree" placeholder="Pedigree">

      <label type="text">
        Idade
      </label>
      <input value="{{$animal->data_nascimento->format('Y-m-d')}}" type="date" name="idade" placeholder="Idade">

      <button type="submit" class="button-form" style="border: hidden;">Salvar Alterações</button>
   </form>

   @if ($errors->has('email') || $errors->has('identificador'))
     <span class="">
         <strong>Erro ao Editar</strong>
     </span>
   @endif
   </div>
</div>
@stop
