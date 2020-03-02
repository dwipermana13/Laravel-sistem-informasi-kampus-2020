<?php

namespace App\Http\Requests;

use App\Models\Hari;

use Illuminate\Foundation\Http\FormRequest;

class hariStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama'=>'required|unique:haris,nama,' . $this->segment(2)
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'nama harus diisi',
            'nama.unique'=>'nama sudah ada'
        ];
    }
}
