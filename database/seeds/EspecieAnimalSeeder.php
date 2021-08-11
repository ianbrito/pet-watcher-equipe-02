<?php

use Illuminate\Database\Seeder;
use \App\EspecieAnimal;

class EspecieAnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        EspecieAnimal::create(['descricao'=> 'Ave']);
        EspecieAnimal::create(['descricao'=> 'Reptil']);
        EspecieAnimal::create(['descricao'=> 'Mamifero']);
    }
}

