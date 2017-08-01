<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InboxModel extends Model
{
    protected $primaryKey = 'id_surat';
    protected $table = "tbl_inbox";
    protected $fillable = [
        'tanggal_terima',
        'tanggal_surat',
        'nomor_surat',
        'asal_surat',
        'perihal',
        'status'];
}
