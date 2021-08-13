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
            'cnpj' => '12312313434',
            'inscricao_estadual' => '000000',
            'razao_social' => '1233333',
            'telefone' => '93991884830',
            'email' => 'rx001@gmail.com',
            'endereco' => 'Rua A'
           ]
        );
    }
}
