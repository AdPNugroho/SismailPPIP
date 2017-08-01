<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenggunaModel extends Model
{
    protected $primaryKey = 'id_pengguna';
    protected $table = "tbl_pengguna";
    protected $fillable = [
        'username',
        'password',
        'status',
        'last_login'
    ];
}
