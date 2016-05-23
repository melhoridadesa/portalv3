<?php

use Illuminate\Database\Seeder;

class Contato extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $i = 0;
      while($i<=5){
      DB::table('contato')->insert([
          'nome' => str_random(10),
          'email' => str_random(10).'@gmail.com',
          'assunto' => str_random(15),
          'mensagem' => str_random(30),
      ]);
      $i++;
    }
  }
}
