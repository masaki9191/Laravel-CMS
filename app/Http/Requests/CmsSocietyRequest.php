<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CmsSocietyRequest extends FormRequest
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
            'cms_society_text' => 'required',
            'cms_society_sortnum'=>'required',
            'cms_society_date'=>'required',
        ];
    }

}
