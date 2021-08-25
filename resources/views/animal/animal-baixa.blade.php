@extends('layout')

@section('content')

<div class="container-card-cred" style="margin-top: 5vh;">
   <div class=" card card-cred">
      <h5 class="card-cred-title">
         Baixa de Animal
      </h5>
   
      <h1 class="card-body card-cred-body">
         <form action="" method="post">
            @csrf
            {{method_field('put')}}
            <label for="descricao">Microchip do animal </label>
            <input style="border-radius: 10px;" class="form-control" type="text" name="microchip" placeholder="microchip" value="">
            <input style="width: 100%;" class="btn cadastro-cred" type="submit" value="Buscar">
      </form>
      </h1>

   </div>
</div>
@stop