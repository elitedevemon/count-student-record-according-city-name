<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Student;
use App\Models\Tacher;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // User::factory(10)->create();
    City::factory(5)->create();
    Student::factory(20)->create();
    Tacher::factory(10)->create();


    User::factory()->create([
      'name' => 'Test User',
      'email' => 'test@example.com',
    ]);
  }
}