<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginUserRequest extends FormRequest
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
            //
            'no_sim' => ['required', 'min:12', 'max:12'],
            'password' => ['required', 'min:8', 'max:30'],
        ];
    }

       /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'no_sim.required' => 'masukkan no sim!',
            'no_sim.min' => 'nomor sim harus memiliki minimal 12 karakter!',
            'no_sim.max' => 'nomor sim harus memiliki maksimal 12 karakter!',
            'password.required' => 'masukkan kata sandi!',
            'password.min' => 'kata sandi harus memiliki minimal 8 karakter!',
            'password.max' => 'kata sandi harus memiliki maksimal 30 karakter!',
        ];
    }
}
