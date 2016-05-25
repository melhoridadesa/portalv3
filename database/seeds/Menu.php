<?php

use Illuminate\Database\Seeder;

class Menu extends Seeder
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
          'tipo_acesso' => 'u',
      ]);
      DB::table('menu')->insert([
          'titulo' => 'Quem somos',
          'link' => '/quemsomos',
          'tipo_acesso' => 'u',
      ]);
      DB::table('menu')->insert([
          'titulo' => 'Contato',
          'link' => '/contato',
          'tipo_acesso' => 'u',
      ]);
      DB::table('menu')->insert([
          'titulo' => 'Login',
          'link' => '/login',
          'tipo_acesso' => 'u',
      ]);
      DB::table('menu')->insert([
          'titulo' => 'Cadastro',
          'link' => '/cadastro',
          'tipo_acesso' => 'a',
      ]);
    }
}
