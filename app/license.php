<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class license extends Model
{
    protected $table = 'licenses';
    protected $fillable = ['id', 'ma_license','id_book','trangthai','ngaydung'];
    public $timestams = false;
}
