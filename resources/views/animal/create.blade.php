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
         Data Nascimento *
      </label>
      <input type="date" name="data_nascimento" placeholder="Data Nascimento">

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
