<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        // dd($this->all());
        return [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric', 'digits_between:9,15'],
            'email' => ['required', 'email', 'max:255'],
            // 'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:3000'],
            'to' => ['required', 'email', 'max:255'],
        ];
    }
}
