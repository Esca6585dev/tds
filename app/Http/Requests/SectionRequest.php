<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name_tm' => 'required',
            'name_en' => 'required',
            'name_ru' => 'required',
            'desc_tm' => 'nullable',
            'desc_en' => 'nullable',
            'desc_ru' => 'nullable',
            'route' => 'nullable',
            'image' => 'nullable',
            'section_id' => 'nullable',
        ];

    }
}
