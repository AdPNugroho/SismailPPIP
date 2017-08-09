<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOutboxFax extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_outbox_fax', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggal_berita_fax');
            $table->string('nomor_fax');
            $table->string('tujuan');
            $table->integer('jumlah_hal');
            $table->date('tanggal_kirim');
            $table->text('hal');
            $table->text('tembusan')->nullable();
            $table->string('nama_petugas');
            $table->string('nip');
            $table->string('jabatan_petugas');
            $table->string('penandatangan');
            $table->string('nama_kasi');
            $table->string('nip_kasi');
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
        Schema::dropIfExists('tbl_outbox_fax');
    }
}
