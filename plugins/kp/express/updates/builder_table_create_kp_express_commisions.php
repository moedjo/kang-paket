<?php namespace KP\Express\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKpExpressCommisions extends Migration
{
    public function up()
    {
        Schema::create('kp_express_commisions', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->bigInteger('amount');

            $table->integer('user_id')->unsigned()->nullable();

        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kp_express_commisions');
    }
}
