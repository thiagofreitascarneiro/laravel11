<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    /**
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     *
     * @return array<string, 
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|unique:tasks,title,NULL,id,user_id,' . $this->user()->id,
            'description' => 'nullable|string',
            'completed' => 'sometimes|boolean'
        ];
    }
}
