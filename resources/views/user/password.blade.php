@extends('layout')
@section('content')
<div class="container-login">
   <div hidden >{{ URL::asset('css/login/login.css')}}</div>
   <h1>Pet Watcher</h1>
   <section class="login-section">
      <form action="{{action('UserController@updatePassword', Auth::user()->id)}}" method="post">
         @csrf

         <label>
            Nova Senha *
            <input type="password" name="password" placeholder="senha">
         </label>

         <button type="submit">Trocar Senha</button>
      </form>
   </section>
</div>
@stop
