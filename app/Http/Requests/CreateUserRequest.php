<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:6'],
            'password' => ['required', 'min:8', 'max:30'],
            'address' => 'required',
            'telp' => ['required', 'integer', 'digits_between:12,13'],
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
            'name.required' => 'masukkan nama anda!',
            'password.required' => 'masukkan kata sandi!',
            'address.required' => 'masukkan alamat anda saat ini!',
            'telp.required' => 'masukkan no telpon anda!',
            
            'no_sim.min' => 'nomor sim harus memiliki minimal 12 karakter!',
            'no_sim.max' => 'nomor sim harus memiliki maksimal 12 karakter!',
            'name.string' => 'format penulisan nama tidak sesuai!',
            'name.min' => 'nama harus memiliki minimal 6 karakter!',
            'password.min' => 'kata sandi harus memiliki minimal 8 karakter!',
            'password.max' => 'kata sandi harus memiliki maksimal 30 karakter!',
            'address.min' => 'alamat harus memiliki minimal 20 karakter!',
            'address.max' => 'alamat harus memiliki maksimal 80 karakter!',
            'telp.integer' => 'format nomor telepon tidak sesuai!',
            'telp.digits_between' => 'nomor telepon harus berisi 13 karakter!',
        ];
    }
}
