<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->char('name',255)->nullable();
            $table->char('name2',255)->nullable();
            $table->char('brand',255)->nullable();
            $table->integer('id_brand')->nullable();
            $table->integer('id_type')->nullable();
            $table->char('Screen',255)->nullable();
            $table->char('CPU',255)->nullable();
            $table->char('RAM',255)->nullable();
            $table->char('Camera',255)->nullable();
            $table->char('Selfie',255)->nullable();
            $table->char('PIN',255)->nullable();
            $table->text('description')->nullable();
            $table->double('unit_price')->nullable();
            $table->double('promotion_price')->nullable();
            $table->char('image',255)->nullable();
            $table->char('unit',255)->nullable();
            $table->char('count_bought',255)->nullable();
            $table->tinyInteger('new')->nullable();
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
        Schema::dropIfExists('products');
    }
}
