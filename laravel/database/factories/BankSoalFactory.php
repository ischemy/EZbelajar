<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BankSoal>
 */
class BankSoalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'jumlahSoal' => $this->faker->numberBetween(1,10),
            'soal' => $this->faker->file,
            'jawaban' => $this->faker->file,
        ];
    }
}
