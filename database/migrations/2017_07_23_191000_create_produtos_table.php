<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
          $table->increments('id');
      $table->integer('sub_categoria_id')->unsigned();
      $table->foreign('sub_categoria_id')->references('id')->on('subcategorias')->onDelete('cascade');
      $table->integer('disponibilidade_id')->unsigned();
      $table->foreign('disponibilidade_id')->references('id')->on('disponibilidades')->onDelete('cascade');
      $table->integer('marca_id')->unsigned();
      $table->foreign('marca_id')->references('id')->on('marcas')->onDelete('cascade');
      $table->string('titulo');
      $table->string('descricao');
      $table->string('codigo');
      $table->decimal('valor', 6, 2);
      $table->string('conteudo')->nullable();
      $table->string('voltagem')->nullable();
      $table->longText('imagem')->nullable();
      $table->longText('medida')->nullable();
      $table->bigInteger('visualizacoes')->default(0);
      $table->enum('publicar',['sim','nao'])->default('sim');
      $table->enum('status',['Ativado','Desativado'])->default('Ativado');
      $table->string('url', 100)->unique()->nullable();
      $table->boolean('ativo')->nullable();
      $table->enum('estoque',['sim', 'nao']);
      $table->timestamps();

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
