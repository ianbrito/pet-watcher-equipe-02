<?php

use Illuminate\Database\Seeder;

use \App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create(
            [
                'name' => 'Lean',
                'tipo_conta' => '1',
                'login' => 'email',
                'email' => 'l@gmail.com',
                'password' => bcrypt('123'),
            ]
        );
        User::create(
         [
             'name' => 'Octacílio',
             'tipo_conta' => '2',
             'login' => 'cnpj',
             'email' => 'octa.oca44@gmail.com',
             'password' => bcrypt('444'),
         ]
     );
     User::create(
      [
          'name' => 'Marcos',
          'tipo_conta' => '3',
          'login' => 'email',
          'email' => 'mhx.g44@gmail.com',
          'password' => bcrypt('222'),
      ]
  );
    }
}
