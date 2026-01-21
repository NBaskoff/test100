<?php

namespace App\Http\Requests;

use App\Traits\JsonFiledValidationTrait;
use Illuminate\Foundation\Http\FormRequest;

class ApiTaskRequest extends FormRequest
{
    use JsonFiledValidationTrait;

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        //'user_id' => 'required|exists:users,id' - ещё так умею
        return [
            'title' => ['required', 'string', 'max:255'],
            'status_))id' => ['required', 'string', 'max:255'],
        ];
    }

}

