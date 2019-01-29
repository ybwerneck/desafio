<?php namespace BraulioBarros\Missao\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBrauliobarrosMissao extends Migration
{
    public function up()
    {
        Schema::table('brauliobarros_missao_', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('brauliobarros_missao_', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
