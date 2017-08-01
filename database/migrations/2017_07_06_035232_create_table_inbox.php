<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInbox extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('tbl_inbox');
        
        Schema::create('tbl_inbox', function (Blueprint $table) {
            $table->increments('id_surat');
            $table->date('tanggal_terima');
            $table->date('tanggal_surat');
            $table->string('nomor_surat',40);
            $table->string('asal_surat',100);
            $table->text('perihal');
            $table->enum('status', ['1', '2']);
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
        Schema::dropIfExists('tbl_inbox');
    }
}
