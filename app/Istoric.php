<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Istoric extends Model
{
    protected $fillable = ['nr_masina', 'nume_client', 'prenume_client','data_programare', 'defect', 'detalii','mecanic'];
}
