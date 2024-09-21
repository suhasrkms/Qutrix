<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Student extends Model
{
    protected $connection = 'mongodb'; // Specify MongoDB connection
    protected $collection = 'students'; // Specify the collection name

    protected $fillable = [
        'name',
        'age',
        'email'
    ];

    public function addresses()
    {
        return $this->hasMany(Address::class, 'student_id');
    }
}
