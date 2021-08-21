@extends('layout')

@section('content')
<div class="card" style="width: 50%;">
    <div class="card-header">
        visualiza Especie
    </div>

    <div class="card-body">
        <p>ID: {{$especie_animal->id}} </p>
        <p>Descricao: {{$especie_animal->descricao}} </p>
        <a class="btn btn-primary" href="{{ action('EspecieAnimalController@index')}} "> voltar</a>
    </div>

</div>
@stop
