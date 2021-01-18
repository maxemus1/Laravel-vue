<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('products_id')->unsigned();
            $table->foreignId('user_id')->unsigned();
            $table->bigInteger('prise');
            $table->string('status');
            $table->date('date_orders')->nullable();
            $table->timestamps();

            $table->foreign('products_id')->references('id')->on('products')->onDelete('NO ACTION');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('NO ACTION');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
