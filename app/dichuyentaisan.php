<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dichuyentaisan extends Model
{
    protected $table = 'nhatkitaisan';
    protected $fillable = ['id', 'id_taisan','id_nguoidung','ngaydichuyen'];
    public $timestams = false;
}

