<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDisposisi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('tbl_disposisi');
        
        Schema::create('tbl_disposisi', function (Blueprint $table) {
            $table->increments('id_disposisi');
            $table->integer('id_surat')->unsigned();
            $table->enum('kasi_adm_bimbingan', ['0', '1']);
            $table->enum('kasi_bim_penagihan', ['0', '1']);
            $table->enum('kasi_intelijen', ['0', '1']);
            $table->enum('kasi_adm_bukti', ['0', '1']);
            $table->enum('kasi_ketua_kelompok_satu', ['0', '1']);
            $table->enum('kasi_ketua_kelompok_dua', ['0', '1']);
            $table->string('disposisi_lainnya',60)->nullable();
            $table->text('catatan')->nullable();
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
        Schema::dropIfExists('tbl_disposisi');
    }
}
