<?php

declare(strict_types=1);

namespace App\Request;

use Hyperf\Validation\Request\FormRequest;
use Hyperf\Validation\Rule;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
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
        $passwordRule = $this->isMethod('post') ? 'required' : 'nullable';

        return [
            'name' => ['required', 'min:5', 'max:150'],
            'email' => [
                'required',
                'email',
                'max:150',
                Rule::unique('users')->ignore($this->route('id')),
            ],
            'password' => [$passwordRule, 'min:8'],
        ];
    }
}
