@extends('layout')

@section('content')
   <h1 class="titulo-tabela card text-white mb-3" style="background-color: #5866E4;min-width: 24rem;min-heigth: 10rem; border-radius: 15px;font-size: 2rem; padding: 1vh 1vh" >Consultar Animal</h1>

   <div class="container-animal">

<div class="container-card-animal" style="margin-bottom: 20px;">   
      <div class="card card-animal">
         <h5 class="card-animal-title">Dados do Animal</h5>
         <div class="card-animal-body card-body">
            
            <div class="card-animal-item">
               <h4>Nome do Animal</h4>
               <h5>Sif</h5>
            </div>
            <div class="card-animal-item">
               <h4>Proprietário</h4>
               <h5>Otto</h5>
            </div>
            <div class="card-animal-item">
               <h4>Tipo de aquisição</h4>
               <h5>Adoção</h5>
            </div>
            <div class="card-animal-item">
               <h4>Espécie</h4>
               <h5>Mamífero</h5>
            </div>
            <div class="card-animal-item">
               <h4>Data de Nascimento</h4>
               <h5>12/12/2020</h5>
            </div>
            <div class="card-animal-item">
               <h4>Fase</h4>
               <h5>Adulto</h5>
            </div>
            <div class="card-animal-item">
               <h4>Porte</h4>
               <h5>Médio</h5>
            </div>
            <div class="card-animal-item">
               <h4>Sexo</h4>
               <h5>Macho</h5>
            </div>
      </div>
</div>
</div>

<div class="container-card-animal">  
   <div class="card card-animal" id="card-contato-cred">
      <h5 class="card-animal-title">Credenciada Responsável</h5>
      <div class="card-animal-body card-body">
            
         <div class="card-animal-item">
            <h4>Razão Social</h4>
            <h5>Dom Pet</h5>
         </div>
         <div class="card-animal-item">
            <h4>Telefone</h4>
            <h5>3522-9295</h5>
         </div>
      </div>
   </div>
</div>


</div>
@stop


{{-- 
   
Informações sobre Prorietário:
● Tipo (Pessoa Física ou Pessoa Jurídica)
● cpf/cnpj
● nome
● telefone
● email
● endereço
   
   --}}