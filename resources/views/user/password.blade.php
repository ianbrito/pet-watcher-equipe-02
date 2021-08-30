@extends('layout')
@section('content')
<div class="container-login">
   <div class="card card-cred">

      <div class="card-cred-title" style="display: flex; flex-direction: column; justify-content:center; aling-items:center;">
         <div style="display: flex; justify-content:center; aling-items:center;">
            <img style="width: 60px;" src="{{asset('./pawprints.png')}}" alt="deeeeeee">
         </div>
         <div style="text-align: center;font-size: 30px;">Alterar Senha</div>
      </div>

   <div hidden >{{ URL::asset('css/login/login.css')}}</div>
      <form  class="card-body card-cred-body"  action="{{action('UserController@updatePassword', Auth::user()->id)}}" method="post">
         @csrf

         <label>
            Nova Senha *
         </label>
         <input type="password" name="password" placeholder="senha">

         <button class="button-form" style="border: hidden;" type="submit">Salvar Alterações</button>
      </form>
   </div>
</div>
@stop
