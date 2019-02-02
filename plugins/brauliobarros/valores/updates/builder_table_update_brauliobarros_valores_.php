<?php namespace BraulioBarros\Valores\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBrauliobarrosValores extends Migration
{
    public function up()
    {
        Schema::table('brauliobarros_valores_', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('brauliobarros_valores_', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
