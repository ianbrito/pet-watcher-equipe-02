@extends('layout')

@section('content')
<div style="display: flex; aling-items:center; justify-content: space-evenly;">
      <div class="card card-hover" style="width: 20rem; margin-top: 5vh">
         <div class="card-body">
            <h5 class="card-title">Gerenciar Credenciadas</h5>
            <p class="card-text">Acesso a estabelecimentos cadastrados, disponíveis para visualização e atualização. </p>
         </div>
         <a href="/credenciadas" style="width: 100%;font-weight: bold;padding: 2vh 2vh;" class="btn btn-primary">Gerenciar</a>
      </div>

      <div class="card card-hover" style="width: 20rem; margin-top: 5vh">
         <div class="card-body">
            <h5 class="card-title">Cadastrar Usuário</h5>
            <p class="card-text">Acesso ao formulario de cadastro de usuários.</p>
         </div>
         <a href="{{action('UserController@create')}}" style="width: 100%;font-weight: bold;padding: 2vh 2vh;" class="btn btn-primary">Ver Formulário</a>
      </div>

      <div class="card card-hover" style="width: 20rem; margin-top: 5vh">
         <div class="card-body">
            <h5 class="card-title">Gerenciar Licenças</h5>
            <p class="card-text">Acesso ao cadastramento de licenças para estabelecimentos credenciados.</p>
         </div>
         <a href="/licencas" style="width: 100%; font-weight: bold;padding: 2vh 2vh;" class="btn btn-primary">Gerenciar</a>
      </div>

      <div class="card card-hover" style="width: 20rem; margin-top: 5vh">
         <div class="card-body">
            <h5 class="card-title">Gerenciar Proprietarios</h5>
            <p class="card-text">Acesso a todos os proprietarios cadastrados, cria, atualização.</p>
         </div>
         <a href="/proprietario" style="width: 100%; font-weight: bold;padding: 2vh 2vh;" class="btn btn-primary">Gerenciar</a>
      </div>
   </div>
</div>

<div style="display: flex; aling-items:center; justify-content: space-evenly">


   <div style="display: flex; aling-items:center; justify-content: space-evenly">
      <div class="card card-hover" style="width: 20rem; margin-top: 5vh">
         <div class="card-body">
            <h5 class="card-title">Gerenciar Espécies</h5>
            <p class="card-text">Acesso a todas as espécies cadastradas para cadastro, atualização e consulta.</p>
         </div>
         <a href="/especieanimal" style="width: 100%; font-weight: bold;padding: 2vh 2vh;" class="btn btn-primary">Gerenciar</a>
   </div>
</div>
@endsection
