<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMpoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpolicies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama')->nullable();
            $table->string('co_broke')->default('yes');
            $table->string('reference')->default('yes');
            $table->Integer('min_sell')->default('1');
            $table->Integer('split_fee')->default('50');
            $table->Integer('co_fee')->default('50');
            $table->Integer('reference_fee')->default('20');
            $table->Double('ppn')->default('10');
            $table->Integer('delete')->default('0');

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
        Schema::dropIfExists('mpolicies');
    }
}
