<?php

use App\Proprietario;
use Illuminate\Database\Seeder;

class ProprietarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
   {
      Proprietario::create([
         'identificador' => '024888123-01',
         'tipo_pessoa' => 'Física',
         'nome' => 'Octacílio Almeida',
         'telefone' => '93991180962',
         'email' => 'octa.oca11@gmail.com',
         'endereco' => 'Rua A',
      ]);

      Proprietario::create([
         'identificador' => '024850832-76',
         'tipo_pessoa' => 'Física',
         'nome' => 'Octacílio Carvalho',
         'telefone' => '93991180962',
         'email' => 'octa.oca17@gmail.com',
         'endereco' => 'Rua A',
      ]);
   }
}
