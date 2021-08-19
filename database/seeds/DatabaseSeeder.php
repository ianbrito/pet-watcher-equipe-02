<?php

use Illuminate\Database\Seeder;
use \App\User;
use \App\Credenciada;
use App\EspecieAnimal;

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
        $this->call(UserSeeder::class);
        $this->call(CredenciadaSeeder::class);
        $this->call(EspecieAnimalSeeder::class);

    }
}
