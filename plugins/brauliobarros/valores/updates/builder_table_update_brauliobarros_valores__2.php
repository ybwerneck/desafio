<?php namespace BraulioBarros\Valores\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBrauliobarrosValores2 extends Migration
{
    public function up()
    {
        Schema::table('brauliobarros_valores_', function($table)
        {
            $table->text('valores')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('brauliobarros_valores_', function($table)
        {
            $table->integer('valores')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
