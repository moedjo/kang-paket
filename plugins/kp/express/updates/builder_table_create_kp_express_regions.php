<?php namespace KP\Express\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKpExpressRegions extends Migration
{
    public function up()
    {
        Schema::create('kp_express_regions', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('type');
                
            $table->string('name');
            $table->integer('parent_id')->unsigned()->nullable();
   
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->string('postal_codes')->nullable();
           
           
            $table->primary('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kp_express_regions');
    }
}
