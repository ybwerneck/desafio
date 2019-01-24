<?php namespace Yan\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateYanSlider2 extends Migration
{
    public function up()
    {
        Schema::table('yan_slider_', function($table)
        {
            $table->dropColumn('image');
        });
    }
    
    public function down()
    {
        Schema::table('yan_slider_', function($table)
        {
            $table->text('image');
        });
    }
}
