<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/students', function () {
    $students = Student::with('addresses')->get();
    return view('students', compact('students'));
});
