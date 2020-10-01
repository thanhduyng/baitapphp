<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nguoidung extends Model
{
    protected $table = 'nguoidungs';
    protected $fillable = ['id', 'sdt', 'diachi','tennguoidung'];
    public $timestams = false;
}

