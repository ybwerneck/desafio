<?php namespace BraulioBarros\QuemSomos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBrauliobarrosQuemsomos extends Migration
{
    public function up()
    {
        Schema::table('brauliobarros_quemsomos_', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('brauliobarros_quemsomos_', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
