<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      // name, email, phone, class, city_id
      "name" => $this->faker->name,
      "email" => $this->faker->safeEmail,
      "phone" => $this->faker->phoneNumber,
      "class" => $this->faker->numberBetween(1, 10),
      "role" => "student",
      "city_id" => $this->faker->numberBetween(1, 5)
    ];
  }
}