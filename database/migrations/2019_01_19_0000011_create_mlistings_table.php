<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMlistingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mlistings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama')->nullable();
            $table->string('jenis_list')->nullable();
            $table->bigInteger('price')->nullable();
            $table->string('commission')->nullable();
            $table->string('nama_pemilik')->nullable();
            $table->string('no_pemilik')->nullable();
            $table->string('tipe_unit')->nullable();
            $table->string('total_unit')->nullable();
            $table->string('available_unit')->nullable();
            $table->string('jenis_properti')->nullable();
            $table->string('luas_tanah')->nullable();
            $table->string('tinggi')->nullable();
            $table->string('lantai')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('kamar_mandi')->nullable();
            $table->string('kamar_tidur')->nullable();
            $table->string('arah_properti')->nullable();
            $table->longText('spesifikasi')->nullable();
            $table->string('kota')->nullable();
            $table->string('listrik')->nullable();
            $table->string('legalitas')->nullable();
            $table->Integer('delet')->default('0');
            $table->Integer('sold')->default('0');
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('mdeveloper_id')->nullable();
            $table->foreign('mdeveloper_id')->references('id')->on('mdevelopers')->onUpdate('cascade')->onDelete('cascade');
                      
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
        Schema::dropIfExists('mlistings');
    }
}
