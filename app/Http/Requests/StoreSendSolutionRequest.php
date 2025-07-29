<?php

namespace App\Http\Requests;

use App\Enums\Programing_language;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class StoreSendSolutionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'erro' => 'required|string|max:255',
            'Language' => ['required', new Enum(Programing_language::class)],
            'problem_id' => 'required|BigInteger',
            'user_id' => 'required|BigInteger',
            'code_solution' => 'required|text',
            'explanation' => 'required|string|max:255'
        ];
    }
}
