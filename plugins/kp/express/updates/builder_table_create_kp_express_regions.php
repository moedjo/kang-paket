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
            $table->integer('parent_id')->unsigned()->nullable();

            $table->string('name');
            //['country','province', 'regency', 'district']
            $table->string('type');
        
            $table->primary('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kp_express_regions');
    }
}
