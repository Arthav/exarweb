<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMtransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mtransactions', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('property_sold')->nullable();
            $table->String('co_broke')->nullable();
            $table->String('reference')->nullable();
            $table->bigInteger('close_price')->nullable();
            $table->Integer('final_commission')->nullable();
            $table->Integer('split_fee')->nullable();
            $table->Integer('co_fee')->nullable();
            $table->Integer('reference_fee')->nullable();
            $table->Integer('cobroke_id')->nullable();
            $table->Double('ppn')->nullable();
            $table->Integer('delet')->default('0');
            $table->unsignedInteger('mlisting_id')->nullable();
            $table->foreign('mlisting_id')->references('id')->on('mlistings')->onUpdate('cascade')->onDelete('cascade');
            
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
        Schema::dropIfExists('mtransactions');
    }
}
