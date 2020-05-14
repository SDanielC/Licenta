<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class part extends Model
{
    protected $fillable = ['cod', 'denumire', 'cantitate'];
}
