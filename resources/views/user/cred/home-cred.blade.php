@extends('layout')

@section('content')

<h1 class="titulo-tabela-cred" style="margin-top: 5vh;">Home da credenciada</h1>

<div style="display: flex; aling-items:center; justify-content: space-evenly;">

   <div class="card card-hover" style="width: 20rem; margin-top: 5vh">
      <div class="card-body">
         <h5 class="card-title">Gerenciar Proprietarios</h5>
         <p class="card-text">Acesso a todos os proprietarios cadastrados, cria, atualização.</p>
      </div>
      <a href="/proprietario" style="width: 100%; font-weight: bold;padding: 2vh 2vh;" class="btn btn-primary">Gerenciar</a>
   </div>

   <div class="card card-hover" style="width: 20rem; margin-top: 5vh">
      <div class="card-body">
         <h5 class="card-title">Gerenciar Animais</h5>
         <p class="card-text">Acesso a todos os animais cadastrados, cria, atualização.</p>
      </div>
      <a href="/animal" style="width: 100%; font-weight: bold;padding: 2vh 2vh;" class="btn btn-primary">Gerenciar</a>
   </div>

   <div class="card card-hover" style="width: 20rem; margin-top: 5vh">
      <div class="card-body">
         <h5 class="card-title">Gerenciar Funcionários</h5>
         <p class="card-text">Acesso a todos os funcionarios cadastrados, cria, atualização.</p>
      </div>
      <a href="/funcionario" style="width: 100%; font-weight: bold;padding: 2vh 2vh;" class="btn btn-primary">Gerenciar</a>
   </div>

</div>

@endsection