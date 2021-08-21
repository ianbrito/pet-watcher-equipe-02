@extends('layout')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th colspan="4">Descrição</th>
        </tr>
    </thead>
    <tbody>
        @foreach($especieAnimal as $tipo)
        <tr>
            <td>{{$tipo->id}}</td>
            <td> {{$tipo->descricao}}</td>
            <td> <a class="btn btn-secondary" href="./especieanimal/{{$tipo->id}}">Ver </a></td>
            <td><a class="btn btn-info btn-sm" href="./especieanimal/edit/{{$tipo->id}}">Editar</a></td>
            <td>
                <form action=" {{action('EspecieAnimalController@destroy', $tipo->id)}} " method="post" onsubmit="return confirm('tem certeza ?')">
                    @csrf
                    {{method_field('delete')}}

                    <input class="btn btn-danger btn-sm" type="submit" value="deletar">

                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a class="btn btn-primary px-5" href=" {{action ('EspecieAnimalController@create')}}">Novo</a>
@stop
