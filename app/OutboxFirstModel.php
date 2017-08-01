<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutboxFirstModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'tbl_outbox_first';
    protected $fillable = [
        'nomor_urut',
        'nomor_surat',
        'tanggal_surat',
        'tujuan',
        'perihal_surat',
        'tembusan',
        'menjawab',
        'kode_seksi_pembuat',
        'kode_jenis'
    ];
}
