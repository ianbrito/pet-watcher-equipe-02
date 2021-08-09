@extends('layout')

@section('content')

<div class="container-login">
   <h1>Pet Watcher</h1>
   <section class="login-section">
      <form action="" method="post" >
         @csrf
         <label>
            Login *
            <input type="text" required>
         </label>
         
         <label>
            Senha *
            <input type="password" required>
         </label>

         <button type="submit">Logar</button>
      </form>
      <div class="links">
         <a href="">Não possuo cadastro!</a>
         <a href="">Esqueci a senha!</a>
      </div>
   </section>
</div>
@stop