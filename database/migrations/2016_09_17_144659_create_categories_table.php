<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->timestamps();
        });
        
        Schema::create('category_order',  function (Blueprint $table) {
            $table->integer('category_id')->unsigned()->index();
            $table->integer('order_id')->unsigned()->index();

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');

            $table->foreign('order_id')
                ->references('id')
                ->on('orders')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_order',  function (Blueprint $table) {
            $table->dropForeign('category_order_category_id_foreign');
            $table->dropForeign('category_order_order_id_foreign');
        });
        
        Schema::dropIfExists('categories');
        Schema::dropIfExists('category_order');
    }
}
