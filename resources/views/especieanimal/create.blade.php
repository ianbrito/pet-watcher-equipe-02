@extends('layout')

@section('content')
<div class="card" style="width: 50%; margin-top: 5px;">
    <div class="card-header">
        Nova Especie
    </div>
    <div class="card-body">
        <form action=" {{action('EspecieAnimalController@store')}} " method="post">
            @csrf
            <label for="descricao">Descricao: </label>
            <input class="form-control" type="text" name="descricao" id="descricao">
            <input class="btn btn-secondary mt-3" type="submit" value="criar">
        </form>
    </div>
</div>

@stop
