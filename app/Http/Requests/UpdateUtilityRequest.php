<?php

namespace App\Http\Requests;

use App\Enums\Programing_language;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class UpdateUtilityRequest extends FormRequest
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
        $utility_id = $this->route('utility.update');
        return [
            'user_id' => 'required|BigInteger',
            'erro' => 'required|string|max:255',
            'language' => ['required', new Enum(Programing_language::class)],
            'print_code' => 'required|string|max:255',
            'code' => 'required|text',
            'explanation' => 'required|string|max:255' 
        ];
    }
}
