<?php namespace Brenner\Projeto\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreatePedidosProdutosTable Migration
 *
 * @link https://docs.octobercms.com/3.x/extend/database/structure.html
 */
return new class extends Migration
{
    /**
     * up builds the migration
     */
    public function up()
    {
        Schema::create('brenner_projeto_pedidos_produtos', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produto_id'); 
            $table->unsignedBigInteger('pedido_id');
            $table->integer('quantidade')->unsigned();
            $table->timestamps();

            $table->foreign('pedido_id')->references('id')->on('brenner_projeto_pedidos');
            $table->foreign('produto_id')->references('id')->on('brenner_projeto_produtos');
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('brenner_projeto_pedidos_produtos');
    }
};
