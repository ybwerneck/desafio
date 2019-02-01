<?php namespace BraulioBarros\Servicos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBrauliobarrosServicos2 extends Migration
{
    public function up()
    {
        Schema::create('brauliobarros_servicos_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nome');
            $table->text('descricao');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('brauliobarros_servicos_');
    }
}
