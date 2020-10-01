<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class taisan extends Model
{
    protected $table = 'taisans';
    protected $fillable = ['id', 'tentaisan', 'giatien','soluong','id_nhacc','id_chungloai','id_nguoidung'];
    public $timestams = false;
}
