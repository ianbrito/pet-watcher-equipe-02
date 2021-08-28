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
         Nome *
       </label>
       <input value="{{$animal->nome}}" type="text" name="nome" placeholder="Nome">

      <label type="text" >
         Tipo Aquisiçao *
      </label><br>
      <select name="tipo_aquisicao" id="" required>
         <option value="Adoção">Adoção</option>
         <option value="Criação Comercial">Criação Comercial</option>
         <option value="De Companhia">De Companhia</option>
         <option value="Proteção Animal">Proteção Animal</option>
      </select>
      <br>

      <label type="text">
        Microship *
      </label>
      <input value="{{$animal->microship}}" type="text" name="microship" placeholder="Microship">

      <label>
         Espécie *
      </label>
      <input value="{{$animal->especie}}" type="text" name="especie" placeholder="Espécie">

      <label type="text">
         Data Nascimento
       </label>
       <input value="{{$animal->data_nascimento->format('Y-m-d')}}" type="date" name="idade" placeholder="Idade">

      <label type="text" >
         Fase *
      </label><br>
      <select name="fase" id="" required>
         <option value="Filhote">Filhote</option>
         <option value="Adulto">Adulto</option>
      </select>
      <br>

      <label type="text" >
         Porte *
      </label><br>
      <select name="porte" id="" required>
         <option value="Pequeno">Pequeno</option>
         <option value="Médio">Médio</option>
         <option value="Grande">Grande</option>
      </select>
      <br>

      <label type="text" >
         Sexo *
      </label><br>
      <select name="sexo" id="" required>
         <option value="Macho">Macho</option>
         <option value="Fêmea">Fêmea</option>
      </select>
      <br>

      <label type="text" >
         Pedigree ? *
      </label><br>
      <select name="pedigree" id="" required>
         <option value="Sim">Sim</option>
         <option value="Não">Não</option>
      </select>
      <br>

      <label type="text" >
         Código Pedigree
      </label>
      <input value="{{$animal->codigo_pedigree}}" type="text" name="codigo_pedigree" placeholder="Código Pedigree">

      <label type="text" >
         Origem Pedigree
      </label>
      <input value="{{$animal->origem_pedigree}}" type="text" name="origem_pedigree" placeholder="Origem Pedigree">

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
