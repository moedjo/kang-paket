<?php namespace KP\Express\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKpExpressDomesticPrices extends Migration
{
    public function up()
    {
        Schema::create('kp_express_domestic_prices', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->integer('route_id')->unsigned()->nullable();

            $table->integer('price')->unsigned()->default(0);
            $table->integer('additional_price')->unsigned()->default(0);

            $table->smallInteger('min_lead_time')->unsigned()->default(0);
            $table->smallInteger('max_lead_time')->unsigned()->default(0);

           

        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kp_express_domestic_prices');
    }
}
