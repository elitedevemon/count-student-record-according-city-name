<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
  /** @use HasFactory<\Database\Factories\StudentFactory> */
  use HasFactory;

  // relation with city table
  public function city(): BelongsTo
  {
    return $this->belongsTo(City::class);
  }
}