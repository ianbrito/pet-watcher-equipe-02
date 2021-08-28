<?php

use Illuminate\Database\Seeder;
use \App\User;
use \App\Credenciada;
use App\EspecieAnimal;
use App\Funcionario;
use App\Licenca;
use App\Proprietario;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CredenciadaSeeder::class);
        $this->call(EspecieAnimalSeeder::class);
        $this->call(LicencaSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(Proprietario::class);
        //$this->call(Funcionario::class);

    }
}
