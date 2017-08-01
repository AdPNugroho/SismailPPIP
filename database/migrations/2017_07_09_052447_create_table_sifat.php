<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSifat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('tbl_sifat');
        Schema::create('tbl_sifat', function (Blueprint $table) {
            $table->increments('id_sifat');
            $table->integer('id_surat')->unsigned();
            $table->enum('sangat_rahasia', ['0', '1']);
            $table->enum('rahasia', ['0', '1']);
            $table->enum('sangat_segera', ['0', '1']);
            $table->enum('segera', ['0', '1']);
            $table->enum('biasa', ['0', '1']);
            $table->text('sifat_lainnya')->nullable();
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
        Schema::dropIfExists('tbl_sifat');
    }
}
