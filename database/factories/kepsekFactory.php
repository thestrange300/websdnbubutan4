<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\kepsek>
 */
class kepsekFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => 'Endriyani Hasto Dewi S.Pd',
            'nip' => '19680804 199403 2 009'
        ];
    }
}
