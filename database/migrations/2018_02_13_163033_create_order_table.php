<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('uniqid');
          $table->date('added_at');
          $table->integer('coustomer_id')->nullable();
          $table->integer('type_id');
          $table->integer('brand_id');
          $table->string('model')->nullable();
          $table->string('sn')->nullable();
          $table->integer('status_id');
          $table->text('description');
          $table->text('diagnosis')->nullable();
          $table->date('readyOn');
          $table->text('comment')->nullable();
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
        Schema::dropIfExists('Orders');
    }
}
