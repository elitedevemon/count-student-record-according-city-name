<?php

use App\Http\Controllers\StudentRecordController;
use App\Http\Controllers\StudentRecordCountController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

// count student record according city
Route::get('student-record', StudentRecordCountController::class);