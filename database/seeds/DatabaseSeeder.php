<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(Conteudo::class);
        $this->call(Menu::class);
        $this->call(Usuario::class);
        $this->call(Contato::class);
    }
}
