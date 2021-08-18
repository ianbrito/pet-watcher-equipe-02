@extends('layout')

@section('content')
<div class="container">
      <div class="card" style="width: 20rem; margin-top: 5vh">
         <div class="card-body">
            <h5 class="card-title">Gerenciar Credenciadas</h5>
            <p class="card-text">Tenha acesso a todas os estabelecimentos cadastrados no sistema, disponíveis para visualização, atualização. </p>
            <a href="/credenciadas" class="btn btn-primary">Gerenciar</a>
         </div>
      </div>

      <div class="card" style="width: 20rem; margin-top: 5vh">
         <div class="card-body">
            <h5 class="card-title">Cadastrar Usuário</h5>
            <p class="card-text">Acesso ao formulario de cadastro de usuários.</p>
            <a href="{{action('UserController@create')}}" class="btn btn-primary">Ver Formulário</a>
         </div>
      </div>
</div>
@endsection