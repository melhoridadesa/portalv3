<?php

use Illuminate\Database\Seeder;

class Usuario extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $i = 0;
      while($i<=10){
      DB::table('users')->insert([
          'name' => str_random(10),
          'email' => str_random(10).'@gmail.com',
          'password' => bcrypt('secret'),
          'tipo_acesso' => 'u',
      ]);
      $i++;
    }
  }
}
