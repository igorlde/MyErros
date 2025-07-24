<?php

namespace Database\Factories;

use App\Enums\Languages;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProblemTranslation>
 */
class ProblemTranslationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'problem_id' => 1,
            'language' => Languages::PT_BR,
            'erro' => '404 not found',
            'description' => 'page not exists'
        ];
    }
}
