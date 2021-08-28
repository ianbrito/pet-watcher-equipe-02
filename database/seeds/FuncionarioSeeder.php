<?php

use Illuminate\Database\Seeder;

use \App\Funcionario;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Funcionario::create([
         'id_credenciada' => 1,
         'nome' => 'Octacílio',
         'email' => 'octa.oca44@gmail.com',
         'cpf' => '11122233366',
         'telefone' => '93991180962',
         'endereco' => 'Rua A',
        ]);

        Funcionario::create([
         'id_credenciada' => 1,
         'nome' => 'Roxas',
         'email' => 'octa.oca00@gmail.com',
         'cpf' => '55122233366',
         'telefone' => '93991180962',
         'endereco' => 'Rua A',
        ]);
    }
}
