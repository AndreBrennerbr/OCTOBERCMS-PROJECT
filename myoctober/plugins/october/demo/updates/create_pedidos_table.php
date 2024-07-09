<?php namespace October\Demo\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreatePedidosTable Migration
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
        Schema::create('october_demo_pedidos', function(Blueprint $table) {
            $table->id();
            $table->foreign('cliente_id')->references('id')->on('brenner_produtos_plugin_clientes');
            $table->foreign('produto_id')->references('id')->on('brenner_produtos_plugin_produtos');
            $table->integer('quantidade')->nullable(false);
            $table->double('total_pedido')->nullable(false);
            $table->enum('status',['started','fail','paid']);
            $table->timestamp('paid_at')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('october_demo_pedidos');
    }
};
