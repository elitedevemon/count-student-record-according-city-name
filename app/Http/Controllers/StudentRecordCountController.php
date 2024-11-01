<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentRecordCountController extends Controller
{
  /**
   * Handle the incoming request.
   */
  public function __invoke(Request $request)
  {
    // check the relations
    $students = Student::with('city:id,city_name')
      ->selectRaw('count(*) as student_count, city_id')
      ->groupBy('city_id')
      ->havingRaw('city_id > ?', [3])
      ->toSql();

    return $students;

  }
}