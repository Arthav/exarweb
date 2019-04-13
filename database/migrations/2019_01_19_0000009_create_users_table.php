<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email',150)->unique();
            $table->string('alamat')->nullable();
            $table->string('nik')->nullable();
            $table->string('telp1')->nullable();
            $table->string('telp2')->nullable();
            $table->string('agama')->nullable();
            $table->string('jeniskelamin')->nullable();
            $table->string('npwp')->nullable();
            $table->unsignedInteger('mrole_id')->default('3');
            $table->foreign('mrole_id')->references('id')->on('mroles')->onUpdate('cascade')->onDelete('cascade');
           
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('delet')->default('0');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
