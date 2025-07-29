<?php

namespace App\Http\Requests;

use App\Enums\Programing_language;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class UpdateProblemRequest extends FormRequest
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
        $problem_id = $this->route('update.problem');
        return [
            'language' => ['required', new Enum(Programing_language::class)],
            'user_id' => 'required|BigInteger',
            'code' => 'required|string|max:255',
            'erro' => 'required|text',
            'description' => 'required|string|max:255'
        ];
    }
}
