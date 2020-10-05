<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class caphoc extends Model
{
    protected $table = 'caphocs';
    protected $fillable = ['id', 'tencap'];
    public $timestams = false;
}
