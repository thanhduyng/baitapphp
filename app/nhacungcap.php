<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhacungcap extends Model
{
    protected $table = 'nhacungcaps';
    protected $fillable = ['id', 'tennhacungcap'];
    public $timestams = false;
}
