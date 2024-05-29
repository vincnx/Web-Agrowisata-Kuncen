<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array{
        return [
            'judul' => $this->faker->sentence(mt_rand(3, 5)),
            'slug' => $this->faker->slug(4),
            'isi' => collect($this->faker->paragraphs(mt_rand(5, 7)))->map(function ($paragraph) {
                return "<p>$paragraph</p>";
            })->implode(''),
            'waktu_upload' => $this->faker->dateTime()
        ];
    }
}
