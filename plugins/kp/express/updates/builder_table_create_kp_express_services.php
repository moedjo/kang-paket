<?php namespace KP\Express\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKpExpressServices extends Migration
{
    public function up()
    {
        Schema::create('kp_express_services', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kp_express_services');
    }
}
