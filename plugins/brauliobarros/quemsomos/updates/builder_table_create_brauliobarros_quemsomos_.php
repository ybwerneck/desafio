<?php namespace BraulioBarros\QuemSomos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBrauliobarrosQuemsomos extends Migration
{
    public function up()
    {
        Schema::create('brauliobarros_quemsomos_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('quemsomos');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('brauliobarros_quemsomos_');
    }
}
