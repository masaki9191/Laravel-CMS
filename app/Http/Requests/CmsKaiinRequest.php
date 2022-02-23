<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkshopRequest extends FormRequest
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
            'cms_kaiin_type'=>'required',
            'cms_member_no'=>'required',
            'cms_kaiin_name1'=>'required',
            'cms_kaiin_name2'=>'required',
            'cms_kaiin_mypost1'=>'required',
            'cms_kaiin_mypost2'=>'required',
        ];
    }

}
