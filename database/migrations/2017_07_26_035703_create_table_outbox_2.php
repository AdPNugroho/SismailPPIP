<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOutbox2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_outbox_second', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nomor_urut');
            $table->string('nomor_surat');
            $table->date('tanggal');
            $table->string('nama_wp')->nullable();
            $table->string('npwp')->nullable();
            $table->string('tahun_pajak');
            $table->string('analis')->nullable();   
            $table->text('tindak_lanjut')->nullable();
            $table->text('kesimpulan')->nullable();
            $table->text('perihal_surat')->nullable();
            $table->integer('kode_jenis');
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
        Schema::dropIfExists('tbl_outbox_second');
    }
}
