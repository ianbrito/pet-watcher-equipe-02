@extends('layout')

@section('content')
   <h1 class="titulo-tabela card text-white mb-3" style="background-color: #4649e9;;min-width: 24rem;min-heigth: 10rem; border-radius: 15px;font-size: 2rem; padding: 1vh 1vh" >Consultar Animal</h1>

   <div class="container-animal">

<div class="container-card-animal">   
      <div class="card card-animal">
         <h5 class="card-animal-title">Dados do Animal</h5>
         <div class="card-animal-body card-body">
            
            <div class="card-animal-item">
               <h4>ID</h4>
               <h5>1</h5>
            </div>
            <div class="card-animal-item">
               <h4>Tipo de aquisição</h4>
               <h5>Adoção</h5>
            </div>
            <div class="card-animal-item">
               <h4>Proprietário</h4>
               <h5>Otto</h5>
            </div>
            <div class="card-animal-item">
               <h4>Nome do Animal</h4>
               <h5>Sif</h5>
            </div>
            <div class="card-animal-item">
               <h4>Número do Microchip</h4>
               <h5>55555-5</h5>
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
            <div class="card-animal-item">
               <h4>Tem Pedigree ?</h4>
               <h5>Não</h5>
            </div>
            <div class="card-animal-item">
               <h4>Código Pedigree</h4>
               <h5>ddd</h5>
            </div>
            <div class="card-animal-item">
               <h4>Origem Pedigree</h4>
               <h5>ddd</h5>
            </div>
            <div class="card-animal-item">
               <h4>Data de Cadastro</h4>
               <h5>23/08/2021</h5>
            </div>
            <div class="card-animal-item">
               <h4>Credenciada responsável pelo cadastro</h4>
               <h5>ddd</h5>
            </div>
            <div class="card-animal-item">
               <h4>Cadastro ativo? (s/n)</h4>
               <h5>Sim</h5>
            </div>
            <div class="card-animal-item">
               <h4>Motivo inativação do cadastro</h4>
               <h5>ddd</h5>
            </div>
      </div>
</div>
</div>

<div class="container-card-animal">  
   <div class="card card-animal" id="card-proprietario">
      <h5 class="card-animal-title">Dados do Proprietário</h5>
      <div class="card-animal-body card-body">
            
         <div class="card-animal-item">
            <h4>ID</h4>
            <h5>1</h5>
         </div>
         <div class="card-animal-item">
            <h4>Tipo</h4>
            <h5>qqqq</h5>
         </div>
         <div class="card-animal-item">
            <h4>CNPJ</h4>
            <h5>qqqq</h5>
         </div>
         <div class="card-animal-item">
            <h4>Nome</h4>
            <h5>dddd</h5>
         </div>
         <div class="card-animal-item">
            <h4>Telefone</h4>
            <h5>ddd</h5>
         </div>
         <div class="card-animal-item">
            <h4>E-mail</h4>
            <h5>octa.oca44@gmail.com</h5>
         </div>
         <div class="card-animal-item">
            <h4>Endereço</h4>
            <h5>Rua A</h5>
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