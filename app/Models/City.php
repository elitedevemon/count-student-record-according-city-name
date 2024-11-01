<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
  /** @use HasFactory<\Database\Factories\CityFactory> */
  use HasFactory;

  // relation with student table
  public function students(): HasMany
  {
    return $this->hasMany(Student::class);
  }
}