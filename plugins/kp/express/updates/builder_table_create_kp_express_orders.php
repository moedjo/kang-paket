<?php namespace KP\Express\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKpExpressOrders extends Migration
{
    public function up()
    {
        Schema::create('kp_express_orders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();

            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('created_user_id')->unsigned()->nullable();
            $table->integer('updated_user_id')->unsigned()->nullable();

            $table->string('receipt_number')->nullable();;

            $table->integer('orderable_id')->unsigned()->nullable();
            $table->string('orderable_type')->nullable();

            $table->integer('origin_region_id')->unsigned()->nullable();
            $table->integer('destination_region_id')->unsigned()->nullable();
    
            $table->integer('branch_id')->unsigned()->nullable();
            $table->integer('vendor_id')->unsigned()->nullable();

            $table->bigInteger('origin_total_price')->unsigned()->default(0);
            $table->bigInteger('final_total_price')->unsigned()->default(0);


            // Payment Info
            // cash, transfer
            $table->string('payment_method')->default('cash');
            // paid, unpaid
            $table->string('payment_status')->default('paid');

            $table->double('discount_percentage', 5, 2)->unsigned()->default(0);
            $table->bigInteger('discount_amount')->unsigned()->default(0);

        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kp_express_orders');
    }
}
