<?php

use Illuminate\Database\Seeder;

class Sconteudo extends Seeder
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
      DB::table('conteudo')->insert([
          'titulo' => str_random(10),
          'texto' => 'Eu'. str_random(10) . 'do idoso',
          'usuario' => 1,
      ]);
      $i++;
    }
  }
}
