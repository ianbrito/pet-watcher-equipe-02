@extends('layout')

@section('content')
<div class="card" style="width: 50%; margin-top: 5px;">
    <div class="card-header">
        Editar Tipo Animal
    </div>
    <div class="card-body">
        <form action=" {{action('EspecieAnimalController@update', $especie_animal->id )}} " method="post">
            @csrf
            {{method_field('put')}}
            <label for="descricao">Descricao: </label>
            <input class="form-control" type="text" name="descricao" id="descricao" value="{{$especie_animal->descricao}}">
            <input class="btn btn-secondary mt-3" type="submit" value="modificar">
        </form>
    </div>
</div>
@stop
