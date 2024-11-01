<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Tacher;
use Illuminate\Http\Request;

class UnionController extends Controller
{
  /**
   * Handle the incoming request.
   */
  public function __invoke(Request $request)
  {
    // create union to student and teacher data: name, email
    $condition = false;
    $student = Student::select('name', 'email', 'role');
    $total = Tacher::select('name', 'email', 'role')
      ->when($condition, function ($query) use ($student) {
        $query->union($student);
      })->get();
    // $total = $student->union($teacher)->get();

    return $total;
  }
}