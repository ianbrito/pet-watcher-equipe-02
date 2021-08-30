<?php

use Illuminate\Database\Seeder;

use \App\Credenciada;

class CredenciadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Credenciada::create(
           [
            'cnpj' => '11222333/0001-00',
            'inscricao_estadual' => '1111111',
            'razao_social' => 'Dom Pet',
            'telefone' => '3522-9295',
            'email' => 'rx001@gmail.com',
            'endereco' => 'Av. Dom Frederico'
           ]
        );

        Credenciada::create(
         [
          'cnpj' => '21222333/0001-00',
          'inscricao_estadual' => '2111111',
          'razao_social' => 'Super Pet',
          'telefone' => '3522-9296',
          'email' => 'rx002@gmail.com',
          'endereco' => 'Av. Rui Barbosa'
         ]
      );

      Credenciada::create(
         [
          'cnpj' => '31222333/0001-00',
          'inscricao_estadual' => '3111111',
          'razao_social' => 'Kit Petstore',
          'telefone' => '3522-9297',
          'email' => 'r003@gmail.com',
          'endereco' => 'Av. Fernando Guilhon'
         ]
      );
    }
}
