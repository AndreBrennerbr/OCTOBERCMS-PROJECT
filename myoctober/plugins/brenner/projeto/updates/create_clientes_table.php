<?php namespace Brenner\Projeto\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateClientesTable Migration
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
        Schema::create('brenner_projeto_clientes', function(Blueprint $table) {
            $table->id('id');
            $table->string('nome');
            $table->enum('sexo',['M','F']);
            $table->timestamps();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('brenner_projeto_clientes');
    }
};
