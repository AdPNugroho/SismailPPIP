<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePetunjuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('tbl_petunjuk');

        Schema::create('tbl_petunjuk', function (Blueprint $table) {
            $table->increments('id_petunjuk');
            $table->integer('id_surat')->unsigned();
            $table->enum('diproses', ['0', '1']);
            $table->enum('ditindaklanjuti', ['0', '1']);
            $table->enum('dimanfaatkan', ['0', '1']);
            $table->enum('diadministrasikan', ['0', '1']);
            $table->enum('dipantau', ['0', '1']);
            $table->enum('diedarkan', ['0', '1']);
            $table->enum('dipelajari', ['0', '1']);
            $table->enum('dicatat', ['0', '1']);
            $table->enum('arsip', ['0', '1']);
            $table->string('petunjuk_lainnya',60)->nullable();
            $table->timestamps();
            $table->foreign('id_surat')
                ->references('id_surat')
                ->on('tbl_inbox')
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
        Schema::dropIfExists('tbl_petunjuk');
    }
}
