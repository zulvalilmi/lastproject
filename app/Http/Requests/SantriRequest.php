<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SantriRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'          => 'required',
            'email'         => 'required|unique:users',
            'password'      => 'required',
        ];
    }

    public function messages()
    {
        return [

            'name.required'      => 'Masukkan Nama Santrinya !',
            'email.required'     => 'Masukkan email Santri !',
            'email.unique'       => 'Email yang ini sudah terdaftar!',
            'password.required'  => 'Masukkan Passwornya minimal 8 yaa !',
        ];
    }
}
