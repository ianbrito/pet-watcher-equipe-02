@extends('layout')
@section('content')

<div class="container-login">
   <h1>Novo Funcionario</h1>
<section class="login-section">
        <form action=" {{action('FuncionarioController@store')}} " method="post">
            @csrf
            <label for="cpf">Cpf * </label>
            <input class="form-control" type="text" name="cpf" id="cpf" required>

            <label for="nome">Nome * </label>
            <input class="form-control" type="text" name="nome" id="nome" required>

            <label for="telefone">Telefone * </label>
            <input class="form-control" type="text" name="telefone" id="telefone" required>


            <label for="email">Email * </label>
            <input class="form-control" type="text" name="email" id="email" required>

            <label for="endereço">Endereço * </label>
            <input class="form-control" type="text" name="endereco" id="endereco" required>

            <input class="btn btn-secondary mt-3" type="submit" value="criar">
        </form>

        @if ($errors->has('cpf') || $errors->has('nome') || $errors->has('telefone') || $errors->has('email') || $errors->has('endereço'))
          <span class="">
              <strong>Erro ao cadastrar</strong>
          </span>
        @endif
     </section>
     </div>
     @stop

