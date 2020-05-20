<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['nume', 'prenume', 'telefon','nr_masina', 'seria', 'marca','model', 'an', 'combustibil','km', 'motor'];
}
