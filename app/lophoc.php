<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lophoc extends Model
{
    protected $table = 'lophocs';
    protected $fillable = ['id', 'tenlop'];
    public $timestams = false;
}
