@extends('layout')

@section('content')
<div class="container-login">
   <h1>Cadastro de Animal</h1>
<section class="login-section">
   <form action="{{action('AnimalController@store')}}" method="post">
      @csrf

      <label>
         Tipo Aquisiçao *
         <input type="text" name="tipo_aquisicao" placeholder="Tipo Aquisição">
      </label>

      <label>
        Nome *
         <input type="text" name="nome" placeholder="Nome">
      </label>

      <label>
        Proprietario *
         <input type="number" name="proprietario_id" placeholder="Proprietario">
      </label>

      <label type="text" >
         Microship *
         <input type="text" name="microship" placeholder="Microship">
      </label>

      <label>
         Espécie *
         <input type="text" name="especie" placeholder="Espécie">
      </label>

      <label>
         Data Nascimento*
         <input type="date" name="data_nascimento" placeholder="Data Nascimento">
      </label>

      <label>
         Fase *
         <input type="text" name="fase" placeholder="Fase">
      </label>

      <label>
         Porte *
         <input type="text" name="porte" placeholder="Porte">
      </label>

      <label>
        Sexo *
         <input type="text" name="sexo" placeholder="Sexo">
      </label>

      <label type="text" >
         Pedigree
         <input type="text" name="pedigree" placeholder="Pedigree">
      </label>

      <label type="text" >
         Código Pedigree
         <input type="text" name="codigo_pedigree" placeholder="Código Pedigree">
      </label>

      <label type="text" >
         Origem Pedigree
         <input type="text" name="origem_pedigree" placeholder="Origem Pedigree">
      </label>

      <label type="text" >
         Credenciada *
         <input type="number" name="credenciada_id" placeholder="Credenciada">
      </label>

      <button type="submit">Cadastrar</button>
   </form>

   @if ($errors->has('tipo_aquisicao') || $errors->has('microship') || $errors->has('pedigree'))
     <span class="">
         <strong>Erro ao cadastrar</strong>
     </span>
   @endif
</section>
</div>
@stop
