<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, 
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $this->user,
            'password' => 'required|string|min:6|confirmed',
        ];
    }
}
