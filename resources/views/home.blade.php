
@extends('layout')

@section('content')
@section('update-password')
@if (auth()->check())
<li class="nav-item">
   <a class="nav-link" href="{{route('reset/password')}}">Atualizar Senha</a>
</li>
@endif
@stop
@stop

