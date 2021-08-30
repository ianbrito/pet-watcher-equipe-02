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
            'cnpj' =>'11222333/0001-00',
            'data_licenciamento' => '2020-12-12',
            'data_vencimento' => '2021-12-12',
            'id_credenciada' => 1
         ]);

         Licenca::create([
            'cnpj' =>'11222333/0001-00',
            'data_licenciamento' => '2020-12-01',
            'data_vencimento' => '2021-12-12',
            'id_credenciada' => 1
         ]);

         Licenca::create([
            'cnpj' =>'21222333/0001-00',
            'data_licenciamento' => '2020-12-17',
            'data_vencimento' => '2021-12-12',
            'id_credenciada' => 2
         ]);

         Licenca::create([
            'cnpj' =>'21222333/0001-00',
            'data_licenciamento' => '2020-12-05',
            'data_vencimento' => '2021-12-12',
            'id_credenciada' => 2
         ]);

         Licenca::create([
            'cnpj' =>'31222333/0001-00',
            'data_licenciamento' => '2020-12-20',
            'data_vencimento' => '2021-12-12',
            'id_credenciada' => 3
         ]);

         Licenca::create([
            'cnpj' =>'31222333/0001-00',
            'data_licenciamento' => '2020-12-09',
            'data_vencimento' => '2021-12-12',
            'id_credenciada' => 3
         ]);
    }
}
