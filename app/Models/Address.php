<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Address extends Model
{
    protected $connection = 'mongodb';

    protected $fillable =  [
        'student_id',
        'street',
        'city',
        'state',
        'zip'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
