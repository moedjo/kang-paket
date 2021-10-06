<?php namespace KP\Express\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKpExpressDomesticOrders extends Migration
{
    public function up()
    {
        Schema::create('kp_express_domestic_orders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();


            
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kp_express_domestic_orders');
    }
}
