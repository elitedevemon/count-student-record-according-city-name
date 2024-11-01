<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tacher>
 */
class TacherFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      // name, email, address
      "name" => $this->faker->name,
      "email" => $this->faker->safeEmail,
      "role" => "teacher",
      "address" => $this->faker->address
    ];
  }
}