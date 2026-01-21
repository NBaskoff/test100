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
        return [
            'title' => ['required', 'string', 'max:255'],
            'status_id' => ['required', 'integer'],
        ];
    }

}

