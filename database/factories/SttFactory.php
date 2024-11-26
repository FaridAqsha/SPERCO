<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stt>
 */
class SttFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // Define the model's default state
            'usid' => $this->faker->unique(),
            'event' => $this->faker->unique()->safeEmail,
            // Tambahkan atribut lainnya sesuai kebutuhan
        ];
    }
}
