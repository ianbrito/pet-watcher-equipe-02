@extends('layout')

@section('content')

   <div class="container-login">
      <h1>Pet Watcher</h1>
   <section class="login-section">
      <form action=" {{action('Auth\LoginController@Login')}} " method="post">
         @csrf
         <label>
            Login *
            <input type="text" name="login" placeholder="login">
         </label>

         <label>
            Senha *
            <input type="password" name="password" placeholder="senha">
         </label>

         <button type="submit">Logar</button>
      </form>

      @if ($errors->has('email') || $errors->has('password'))
        <span class="">
            <strong>Erro ao logar</strong>
        </span>
      @endif

      <div class="links">
         <a href="">Não possuo cadastro!</a>
         <a href="">Esqueci a senha!</a>
      </div>
   </section>
</div>
@stop

