<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisposisiModel extends Model
{
    protected $primaryKey = 'id_disposisi';
    protected $table = "tbl_disposisi";
    protected $fillable = [
        'id_surat',
        'kasi_adm_bimbingan',
        'kasi_bim_penagihan',
        'kasi_intelijen',
        'kasi_adm_bukti',
        'kasi_ketua_kelompok_satu',
        'kasi_ketua_kelompok_dua',
        'disposisi_lainnya',
        'catatan'];
}
