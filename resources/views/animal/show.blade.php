@extends('layout')
@section('content')

   <div style="display: flex;justify-content:center; flex-direction: row-reverse; margin-top: 5vh">
      <a class="btn cadastro-cred" style="margin-right: 10px" href="/animal/edit/{{$animal->id}}">Editar</a>

      <form action="{{ action('AnimalController@destroy', $animal->id) }}" method="post" onsubmit="return confirm('Você deseja deletar animal (&quot;{{ $animal->nome }}&quot;)?')">
      @csrf
      {{method_field('delete')}}
      <button class="btn cadastro-cred" type="submit" value="deletar">Excluir</button>
    </form>

   </div>
{{-- <table class="table">
      <thead>
         <tr class="nome-colunas">
            <th style="border-top-left-radius: 15px;padding-left: 20px" scope="col">ID</th>
            <th>Tipo Aquisição</th>
            <th>Nome</th>
            <th>Proprietario</th>
            <th>Proprietario</th>
            <th>Microship</th>
            <th>Espécie</th>
            <th>Data Nascimento</th>
            <th>Fase</th>
            <th>Porte</th>
            <th>Sexo</th>
            <th>Pedigree</th>
            <th>Código Pedigree</th>
            <th>Origem Pedigree</th>
            <th>Credenciada</th>
            <th style="border-top-right-radius: 15px;" scope="col" style="text-align: center">Endereço</th>
         </tr>
      </thead>
      <tbody>
         <tr scope="row" class="itens">
            <th style="padding-left: 20px">{{$animal->id}}</th>
            <th>{{$animal->tipo_aquisicao}}</th>
            <th>{{$animal->nome}}</th>
            <th>{{$animal->proprietario_id}}</th>
            <th>{{$animal->microship}}</th>
            <th>{{$animal->especie}}</th>
            <th>{{$animal->data_nascimento}}</th>
            <th>{{$animal->fase}}</th>
            <th>{{$animal->porte}}</th>
            <th>{{$animal->sexo}}</th>
            <th>{{$animal->pedigree}}</th>
            <th>{{$animal->codigo_pedigree}}</th>
            <th>{{$animal->origem_pedigree}}</th>
            <th>{{$animal->credenciada_id}}</th>
            <th>{{$animal->ativo}}</th>
            <th>{{$animal->motivo_desativacao}}</th>
            <th>{{$animal->data_cadastro}}</th>
            data_cadastro
         </tr>
      </tbody>
   </table>  --}}

   <div class="container-card-cred">
      <div class="card card-cred" >
         <h5 class="card-cred-title">Dados do<br>animal</h5>
         <div class="card-cred-body card-body">

            <div class="card-cred-item">
               <h4>ID</h4>
               <h5>{{$animal->id}}</h5>
            </div>

            <div class="card-cred-item">
               <h4>Tipo Aquisiçao</h4>
               <h5>{{$animal->tipo_aquisicao}}</h5>
            </div>

            <div class="card-cred-item">
               <h4>Microship</h4>
               <h5>{{$animal->microship}}</h5>
            </div>

            <div class="card-cred-item">
               <h4>Pedigree</h4>
               <h5>{{$animal->pedigree}}</h5>
            </div>

            <div class="card-cred-item">
               <h4>Idade</h4>
               <h5>{{$animal->idade}}</h5>
            </div>
         </div>
      </div>
   </div>
@endsection
