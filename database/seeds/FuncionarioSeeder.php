<?php

use App\Funcionario;
use Illuminate\Database\Seeder;

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
         'nome' => 'Octacílio',
         'id_credenciada' => 1,
         'email' => 'octa.oca44@gmail.com',
         'telefone' => '93991180962',
         'endereco' => 'Rua A',
         'cpf' => '11122233366'
        ]);
    }
}
