<?php

use Illuminate\Database\Seeder;

use App\Animal;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Animal::create([
         'tipo_aquisicao' => 'Adoção',
         'proprietario_id' => 1,
         'nome' => 'Taiga',
         'microship' => '12442',
         'especie' => 'Gato',
         'data_nascimento' => '2021-08-15',
         'fase' => 'Filhote',
         'porte' => 'Pequeno',
         'sexo' => 'Fêmea',
         'pedigree' => 'Não',
         'codigo_pedigree' => 'none',
         'origem_pedigree' => 'none',
         'credenciada_id' => 1,
      ]);

      Animal::create([
         'tipo_aquisicao' => 'Adoção',
         'proprietario_id' => 1,
         'nome' => 'Sif',
         'microship' => '12444',
         'especie' => 'Gato',
         'data_nascimento' => '2021-08-15',
         'fase' => 'Adulto',
         'porte' => 'Médio',
         'sexo' => 'Macho',
         'pedigree' => 'Não',
         'codigo_pedigree' => 'none',
         'origem_pedigree' => 'none',
         'credenciada_id' => 1,
      ]);
    }
}
