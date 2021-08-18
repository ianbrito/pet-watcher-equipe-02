@extends('layout')

@section('content')
<div style="display: flex; aling-items:center; justify-content: space-evenly"> 
      <div class="card" style="width: 20rem; margin-top: 5vh">
         <div class="card-body">
            <h5 class="card-title">Gerenciar Credenciadas</h5>
            <p class="card-text">Acesso a estabelecimentos cadastrados, disponíveis para visualização e atualização. </p>
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

      <div class="card" style="width: 20rem; margin-top: 5vh">
         <div class="card-body">
            <h5 class="card-title">Gerenciar Licenças</h5>
            <p class="card-text">Acesso ao cadastramento de licenças para estabelecimentos credenciados.</p>
            <a href="/licencas" class="btn btn-primary">Gerenciar</a>
         </div>
      </div>
      
</div>

@endsection