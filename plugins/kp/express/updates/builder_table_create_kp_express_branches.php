<?php namespace KP\Express\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKpExpressBranches extends Migration
{
    public function up()
    {
        Schema::create('kp_express_branches', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('vendor_id')->unsigned()->nullable();

            $table->string('name');

        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kp_express_branches');
    }
}
