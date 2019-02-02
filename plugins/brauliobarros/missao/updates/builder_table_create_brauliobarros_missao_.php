<?php namespace BraulioBarros\Missao\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBrauliobarrosMissao extends Migration
{
    public function up()
    {
        Schema::create('brauliobarros_missao_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('missao');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('brauliobarros_missao_');
    }
}
