@extends('layout')
<?php //{{action('UserController@updatePassword', Auth::user())}} ?>
@section('content')
<div class="container-login">
   <h1>Pet Watcher</h1>
   <section class="login-section">
      <form action="{{action('UserController@updatePassword', Auth::user())}}" method="post">
         @csrf

         <label>
            Nova Senha *
            <input type="password" name="password" placeholder="senha">
         </label>

         <button type="submit">Trocar Senha</button>
      </form>
      <div class="links">
         <a href="">Não possuo cadastro!</a>
         <a href="">Esqueci a senha!</a>
      </div>
   </section>
</div>
@stop