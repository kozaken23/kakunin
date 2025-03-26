<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'gender' => $this->faker->numberBetween(1, 3),
            'email' => $this->faker->unique()->safeEmail(),
            'tel' => str_replace('-', '', $this->faker->numerify('080-####-####')),
            'address' => $this->faker->address(),
            'bldg' => $this->faker->optional()->word(), // 空の場合も考慮
            'category_id' => $this->faker->numberBetween(1, 5), // 任意のカテゴリID範囲
            'detail' => $this->faker->text(100),

        ];
    }
}
