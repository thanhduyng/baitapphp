<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chungloai extends Model
{
    protected $table = 'chungloais';
    protected $fillable = ['id', 'tenchungloai'];
    public $timestams = false;
}
