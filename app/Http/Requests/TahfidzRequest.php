<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TahfidzRequest extends FormRequest
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
            'kelasandorid_id'               => 'required',
            'ustadzah_id'                 => 'required',
            'nama_tahfidz'             => 'required',
        ];
    }

    public function messages()
    {
        return [
            'kelasandorid_id.required'      => 'Pilih Kelas !',
            'ustadzah_id.required'        => 'Pilih Ustadzah !',
            'nama_bootcamp.required'    => 'Masukkan nama kelas tahfidz',
        ];
        
    }
    
}
