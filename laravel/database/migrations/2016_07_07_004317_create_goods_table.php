<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('商品主题');
            $table->decimal('price',8,2)->comment('商品标题');
            $table->integer('kucun')->comment('商品库存');
            $table->string('pic')->comment('商品主图');
            $table->integer('cate_id')->comment('商品类别');
            $table->text('content')->comment('商品详情');
            $table->string('color')->comment('商品颜色');
            $table->string('size')->comment('商品尺寸');
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
        Schema::drop('goods');
    }
}
