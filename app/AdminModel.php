<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    protected $primaryKey = 'id_admin';
    protected $table = "tbl_admin";
    protected $fillable = [
        'username',
        'password',
        'last_login'
    ];
}
