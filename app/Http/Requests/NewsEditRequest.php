<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsEditRequest extends FormRequest
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
            'text_tm' => 'required',
            'text_en' => 'required',
            'text_ru' => 'required',
            'image' => 'nullable',
            'category_id' => 'required',
        ];
    }
}
