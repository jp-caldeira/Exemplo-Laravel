<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        //$this->call(criarDiretorSeeder::class);

        DB::table('diretores')->insert([
          "nome"=>Str::random(20);          
        ]);
    }
}
