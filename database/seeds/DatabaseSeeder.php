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

        $this->call(Sconteudo::class);
        $this->call(Smenu::class);
        $this->call(Susuario::class);
        $this->call(Scontato::class);
    }
}
