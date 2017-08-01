<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SifatModel extends Model
{
    protected $primaryKey = 'id_sifat';
    protected $table = "tbl_sifat";
    protected $fillable = [
            'id_surat',
            'sangat_rahasia',
            'rahasia',
            'sangat_segera',
            'segera',
            'biasa',
            'sifat_lainnya'
    ];
}
