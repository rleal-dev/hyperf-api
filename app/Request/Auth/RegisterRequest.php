<?php

declare(strict_types=1);

namespace App\Requests\Auth;

use Hyperf\Validation\Request\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return array
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'max:150'],
            'email' => ['required', 'email', 'max:150', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed'],
        ];
    }
}
