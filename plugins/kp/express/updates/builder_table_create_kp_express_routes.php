<?php namespace KP\Express\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKpExpressRoutes extends Migration
{
    public function up()
    {
        Schema::create('kp_express_routes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->integer('origin_region_id')->unsigned()->nullable();
            $table->integer('destination_region_id')->unsigned()->nullable();
     
            $table->string('type')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kp_express_routes');
    }
}
