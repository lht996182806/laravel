<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id')->comment('主键id');
            $table->string('order_num')->comment('订单编号');
            $table->integer('user_id')->comment('下单用户id');
            $table->integer('address_id')->comment('收货地址id');
            $table->decimal('total',8,2)->comment('总价');
            $table->integer('status')->comment('订单状态1为默认状态')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
