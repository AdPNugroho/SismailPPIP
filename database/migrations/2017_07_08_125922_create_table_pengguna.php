<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePengguna extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('tbl_pengguna');
        
        Schema::create('tbl_pengguna', function (Blueprint $table) {
            $table->increments('id_pengguna');
            $table->string('username')->unique();
            $table->string('password');
            $table->enum('status', ['1','2','3']);
            $table->dateTime('last_login');
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
        Schema::dropIfExists('tbl_pengguna');
    }
}
