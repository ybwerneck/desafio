<?php namespace Yan\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYanSlider3 extends Migration
{
    public function up()
    {
        Schema::table('yan_slider_', function($table)
        {
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('yan_slider_', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
