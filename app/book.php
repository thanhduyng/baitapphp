<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $table = 'books';
    protected $fillable = ['id', 'tensach','giatien','id_lophoc'];
    public $timestams = false;
}
