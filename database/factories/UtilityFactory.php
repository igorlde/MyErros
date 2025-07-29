<?php

namespace Database\Factories;

use App\Enums\Programing_language;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Utility>
 */
class UtilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'user_id' => 1,
            'erro' => 'not found',
            'language' => Programing_language::CPP,
            'print_code' => 'testando',
            'code' => 'int main(){cout<<"Hello world";}',
            'explanation' => 'my hello world do'
        ];
    }
}
