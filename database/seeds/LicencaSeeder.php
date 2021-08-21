<?php

use App\Licenca;
use Illuminate\Database\Seeder;

class LicencaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Licenca::create([
            'cnpj' =>'11223300000',
            'data_licenciamento' => '2020-12-12',
            'data_vencimento' => '2021-12-12',
            'id_credenciada' => 1
         ]);
    }
}
