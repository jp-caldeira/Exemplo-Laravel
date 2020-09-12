<?php

use Illuminate\Database\Seeder;
use App\produtos;

class criarProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // $produto = new produtos();
      // $produto->nome = "Ração para cachorro";
      // $produto->preco = 47.50;
      // $produto->tipo_produto = "ração";
      // $produto->categoria = "cachorro";
      // $produto->marca = "Marca";
      // $produto->imagem = "02-linguagens-de-baixo-nível.jpg";
      // $produto->save();

      factory(produtos::class, 20)->create();

    }

}
