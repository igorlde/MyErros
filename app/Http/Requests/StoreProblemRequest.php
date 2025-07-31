<?php

namespace App\Http\Requests;

use App\Enums\Programing_language;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class StoreProblemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'language' => ['required', new Enum(Programing_language::class)],
            'erro' => ['required','string', 'min:10'],
            'code' => ['required', 'string'],
            'print_code' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:10240'], //10mb
            'description' => ['required', 'string', 'max:255'],
        ];
    }
}
