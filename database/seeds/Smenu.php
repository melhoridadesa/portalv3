<?php

use Illuminate\Database\Seeder;

class Smenu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('menu')->insert([
          'titulo' => 'Home',
          'link' => '/',
      ]);
      DB::table('menu')->insert([
          'titulo' => 'Quem somos',
          'link' => '/quemsomos',
      ]);
      DB::table('menu')->insert([
          'titulo' => 'Contato',
          'link' => '/contato',
      ]);
      DB::table('menu')->insert([
          'titulo' => 'Login',
          'link' => '/login',
      ]);
    }
}
