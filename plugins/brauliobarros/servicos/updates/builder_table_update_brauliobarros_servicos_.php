<?php namespace BraulioBarros\Servicos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBrauliobarrosServicos extends Migration
{
    public function up()
    {
        Schema::table('brauliobarros_servicos_', function($table)
        {
            $table->text('foto');
        });
    }
    
    public function down()
    {
        Schema::table('brauliobarros_servicos_', function($table)
        {
            $table->dropColumn('foto');
        });
    }
}
