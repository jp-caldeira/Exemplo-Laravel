<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
          $table->bigIncrements('id');
        $table->string('nome', 40);
        $table->decimal('preco', 8, 2);
        $table->string('tipo_produto', 40);
        $table->string('categoria', 40);
        $table->string('marca', 40);
        $table->string('imagem', 90);
        $table->string('raca', 40)->nullable();
        $table->string('idade', 40)->nullable();
        $table->string('linha', 40)->nullable();
        $table->string('tipo_racao', 40)->nullable();
        $table->string('sabor', 40)->nullable();
        $table->string('cor', 40)->nullable();
        $table->string('castrado', 40)->nullable();
        $table->string('corante', 40)->nullable();
        $table->string('indicacao', 40)->nullable();
        $table->string('porte', 40)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
