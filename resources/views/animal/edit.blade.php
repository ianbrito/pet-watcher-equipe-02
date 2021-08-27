@extends('layout')

@section('content')
<div class="container-login">
   <h1>Editar Animal</h1>
<section class="login-section">
   <form action="{{action('AnimalController@update',$animal->id)}}" method="post">
      @csrf
      {{ method_field('put') }}
      <label>
          Tipo Aquisição*
         <input value="{{$animal->tipo_aquisicao}}" type="text" name="tipo_aquisicao" placeholder="Tipo Aquisição">
      </label>

      <label type="text">
        Microship *
         <input value="{{$animal->microship}}" type="text" name="microship" placeholder="Microship">
      </label>

      <label type="text">
        Pedigree *
         <input value="{{$animal->pedigree}}" type="text" name="pedigree" placeholder="Pedigree">
      </label>

      <label type="text">
        Idade
         <input value="{{$animal->idade}}" type="text" name="idade" placeholder="Idade">
      </label>

      <button type="submit">Salvar Alterações</button>
   </form>

   @if ($errors->has('email') || $errors->has('identificador'))
     <span class="">
         <strong>Erro ao Editar</strong>
     </span>
   @endif
</section>
</div>
@stop
