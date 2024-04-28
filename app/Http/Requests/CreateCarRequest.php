<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCarRequest extends FormRequest
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
            'no_plat' => ['required'],
            'merk' => ['required'],
            'model' => ['required'],
            'tarif_rental' => ['required', 'integer'],
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
            'no_plat.required' => 'masukkan no plat!',
            'merk.required' => 'masukkan nama merk!',
            'model.required' => 'masukkan nama model!',
            'tarif_rental.required' => 'masukkan tarif sewa per / hari!',
            'tarif_rental.integer' => 'format tarif sewa harus berupa angka!',
        ];
    }
}
