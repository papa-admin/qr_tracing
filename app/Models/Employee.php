<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'uniq_id',
        'lname',
        'fname',
        'mname',
        'num_h',
        'st',
        'brgy',
        'city',
        'p_num',
        'email',
        'rfid'
    ];
}
