<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_sach extends Model
{
    protected $table = 'sachs';
    protected $fillable = ['id', 'tensach', 'soluong'];
    public $timestams = false;
}
