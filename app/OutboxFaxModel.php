<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutboxFaxModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'tbl_outbox_fax';
    protected $fillable = [
        'tanggal_berita_fax',
        'nomor_fax',
        'tujuan',
        'jumlah_hal',
        'tanggal_kirim',
        'hal',
        'tembusan',
        'nama_petugas',
        'nip',
        'jabatan_petugas',
        'penandatangan',
        'nama_kasi',
        'nip_kasi'
    ];
}
