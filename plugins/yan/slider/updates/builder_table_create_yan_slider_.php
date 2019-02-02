<?php namespace Yan\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateYanSlider extends Migration
{
    public function up()
    {
        Schema::create('yan_slider_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->text('titulo');
            $table->text('descricao');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('yan_slider_');
    }
}
