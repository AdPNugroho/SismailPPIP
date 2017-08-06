<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOutbox1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('tbl_outbox_first');
        Schema::create('tbl_outbox_first', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nomor_urut');
            $table->string('nomor_surat');
            $table->date('tanggal_surat');
            $table->text('tujuan');
            $table->text('perihal_surat');
            $table->text('tembusan')->nullable();
            $table->text('menjawab')->nullable();
            $table->text('kode_seksi_pembuat')->nullable();
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
        Schema::dropIfExists('tbl_outbox_first');
    }
}
