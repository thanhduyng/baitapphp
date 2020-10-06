<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lophoc extends Model
{
    protected $table = 'lophocs';
    protected $fillable = ['id', 'tenlop','id_caphoc'];
    public $timestams = false;
}
