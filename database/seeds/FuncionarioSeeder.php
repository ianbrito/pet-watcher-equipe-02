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
        //
        Funcionario::create(
            [
                'cpf_f'=> '99999999999',
                'nome_f' => 'J',
                'telefone_f' => '999999999',
                'email_f' => 'j@g.com',
                'endereco_f' => 'Rua: j'
            ]
        );
    }
}
