<?php namespace BraulioBarros\Valores\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBrauliobarrosValores extends Migration
{
    public function up()
    {
        Schema::create('brauliobarros_valores_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('valores');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('brauliobarros_valores_');
    }
}
