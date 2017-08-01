<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetunjukModel extends Model
{
    protected $primaryKey = 'id_petunjuk';
    protected $table = "tbl_petunjuk";
    protected $fillable = [
            'id_surat',
            'diproses',
            'ditindaklanjuti',
            'dimanfaatkan',
            'diadministrasikan',
            'dipantau',
            'diedarkan',
            'dipelajari',
            'dicatat',
            'arsip',
            'petunjuk_lainnya'
    ];
}
