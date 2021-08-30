@extends('layout')

@section('content')

<div class="container-card-cred" style="margin-top: 5vh;">
   <div class=" card card-cred">

      <div class="card-cred-title" style="display: flex; flex-direction: column; justify-content:center; aling-items:center;">
         <div style="display: flex; justify-content:center; aling-items:center;">
            <img style="width: 60px;" src="{{asset('./pawprints.png')}}" alt="deeeeeee">
         </div>
         <div style="text-align: center;font-size: 30px;">Pet Watcher</div>
      </div>
   
      <form class="card-body card-cred-body" action=" {{action('Auth\LoginController@Login')}} " method="post">
         @csrf
         <label>
            Login *
         </label>
         <input type="text" name="login" placeholder="login">

         <label>
            Senha *
         </label>
         <input type="password" name="password" placeholder="senha">

         <button class="btn button-form" type="submit">Logar</button>
      </form>

      @if ($errors->has('login') || $errors->has('password'))
        <span class="">
            <strong>Erro ao logar</strong>
        </span>
      @endif

   </div>
</div>
@stop

