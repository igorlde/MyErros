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
            
            'language' => Programing_language::JAVA,
            'user_id' => 1,
            'erro' => '
            int i = 0; 
            while (i < 5){   
                System.out.println(i);
              i++; 
            }',
            'code' => '.png',
            'print_code' => 'teste_imagem',
            'description' => 'Não encontro a pagina'
        ];
    }
}
