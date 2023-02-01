<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SetoranRequest extends FormRequest
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
            'santri_id'     => 'required',
            'tahfidz_id'     => 'required',
            'surat_ziyadah'     => 'required',
            'ayat_ziyadah'     => 'required',
            'surat_murojaah'     => 'required',
            'ayat_murojaah'     => 'required',
            'total_hafalan'     => 'required',
        ];
    }

    public function messages()
    {
        return [
            'santri_id.required'           => 'Pilih Nama Santri !',
            'tahfidz_id.required'          => 'Pilih Kelas Tahfidz',
            'surat_ziyadah.required'       => 'Tambahkan Catatan Ziyadah !',
            'ayat_ziyadah.required'        => 'Tambahkan Ayat Ziyadahnya !',
            'surat_murojaah.required'      => 'Tambahkan Catatan Murojaahnya',
            'ayat_murojaah.required'       => 'Tambahkan Ayat Murojaahnya',
            'total_hafalan.required'       => 'Berapa total hafalan santri ?',
        ];
    }
}
