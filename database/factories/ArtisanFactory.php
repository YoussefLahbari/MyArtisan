<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artisan>
 */
class ArtisanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Skills' => $this->faker->jobTitle, // Generating three random words as skills
            'Experience' => $this->faker->numberBetween(1, 30), // Generating a random number of years
            'Description' => $this->faker->paragraph, // Generating a random paragraph
            'ProfileImg' => $this->faker->imageUrl(640, 480, 'people'), // Generating a random image URL
            'Rating' => $this->faker->numberBetween(1, 5), // Generating a random rating between 1 and 5
            'user_id' => \App\Models\User::factory(), // Associating with a user
        ];
    }
}
