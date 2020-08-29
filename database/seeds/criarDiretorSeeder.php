<?php

use Illuminate\Database\Seeder;
use App\diretores;

class criarDiretorSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $diretor = new diretores();
        // $diretor->nome = 'Fulano';
        // $diretor->save();

        //usando a factory
        factory(diretores::Class, 50)->create();
    }
}
