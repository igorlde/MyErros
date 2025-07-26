<?php

namespace Database\Factories;

use App\Enums\Programing_language;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Problem>
 */
class ProblemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => 'System.out.priaaas()',
            'language' => Programing_language::JAVA,
            'user_id' => 1,
            'erro' => '404 not found',
            'description' => 'Não encontro a pagina'
        ];
    }
}
