@extends('layout')

@section('content')
<div class="container-login">
   <div class="card card-cred">
      <div class="card-cred-title" style="display: flex; flex-direction: column; justify-content:center; aling-items:center;">
         <div style="display: flex; justify-content:center; aling-items:center;">
            <img style="width: 60px;" src="{{asset('./pawprints.png')}}" alt="deeeeeee">
         </div>
         <div style="text-align: center;font-size: 30px;">Cadastro de Animal</div>
      </div>

   <form class="card-body card-cred-body" action="{{action('AnimalController@store')}}" method="post">
      @csrf

      <label>
         Tipo Aquisiçao *
      </label>
      <input type="text" name="tipo_aquisicao" placeholder="Tipo Aquisição">

      <label>
        Nome *
      </label>
      <input type="text" name="nome" placeholder="Nome">

      <label>
        Proprietario *
      </label>
      <input type="number" name="proprietario_id" placeholder="Proprietario">

      <label type="text" >
         Microship *
      </label>
      <input type="text" name="microship" placeholder="Microship">

      <label>
         Espécie *
      </label>
      <input type="text" name="especie" placeholder="Espécie">

      <label>
         Data Nascimento*
      </label>
      <input type="date" name="data_nascimento" placeholder="Data Nascimento">

      <label>
         Fase *
      </label>
      <input type="text" name="fase" placeholder="Fase">

      <label>
         Porte *
      </label>
      <input type="text" name="porte" placeholder="Porte">

      <label>
        Sexo *
      </label>
      <input type="text" name="sexo" placeholder="Sexo">

      <label type="text" >
         Pedigree
      </label>
      <input type="text" name="pedigree" placeholder="Pedigree">

      <label type="text" >
         Código Pedigree
      </label>
      <input type="text" name="codigo_pedigree" placeholder="Código Pedigree">

      <label type="text" >
         Origem Pedigree
      </label>
      <input type="text" name="origem_pedigree" placeholder="Origem Pedigree">

      <label type="text" >
         Credenciada *
      </label>
      <input type="number" name="credenciada_id" placeholder="Credenciada">

      <button class="button-form" style="border: hidden;" type="submit">Cadastrar</button>
   </form>

   @if ($errors->has('tipo_aquisicao') || $errors->has('microship') || $errors->has('pedigree'))
     <span class="">
         <strong>Erro ao cadastrar</strong>
     </span>
   @endif
</div>
</div>
@stop
