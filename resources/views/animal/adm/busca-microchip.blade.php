@extends('layout')

@section('content')
<div class="container-animal">
   <div class="container-card-animal">  
      <div class="card card-animal">
         <h5 class="card-animal-title">Buscar por Microchip</h5>
         <div class="card-animal-body card-body">
            <label for="microchip">Microchip do animal</label>
            <input style="border-radius: 10px;" class="form-control" type="text" name="microchip" placeholder="Microchip" required>
            <input style="width: 100%;" class="btn cadastro-cred" type="submit" value="Buscar">
         </div>
      </div>
   </div>
</div>
@endsection