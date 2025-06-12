<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageCounter extends Model
{
    public $timestamps = false;
    protected $table = 'pagecounter';
    protected $fillable = ['jumlah'];
}
