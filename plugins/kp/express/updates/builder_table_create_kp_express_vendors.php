<?php namespace KP\Express\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKpExpressVendors extends Migration
{
    public function up()
    {
        Schema::create('kp_express_vendors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->string('name');

            $table->double('international_commision', 5, 2)->unsigned()->default(0);
            $table->double('domestic_commision', 5, 2)->unsigned()->default(0);

        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kp_express_vendors');
    }
}
