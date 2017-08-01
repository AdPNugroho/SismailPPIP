<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutboxSecondModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'tbl_outbox_second';
    protected $fillable = [
        'nomor_urut',
        'nomor_surat',
        'tanggal',
        'nama_wp',
        'npwp',
        'tahun_pajak',
        'analis',
        'tindak_lanjut',
        'kesimpulan',
        'perihal_surat',
        'kode_jenis'
    ];
}
