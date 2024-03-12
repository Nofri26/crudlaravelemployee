<?php

namespace Modules\Employee\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Modules\Employee\Entities\Employee;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name,
            'alamat' => $this->faker->address,
            'email' => $this->faker->unique()->safeEmail,
            'no_telp' => $this->faker->phoneNumber,
        ];
    }
}