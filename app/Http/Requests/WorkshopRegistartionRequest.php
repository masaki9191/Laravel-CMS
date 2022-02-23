<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkshopRegistartionRequest extends FormRequest
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
            'name1' => 'required',
            'name2' => 'required',
            'kana1' => 'required',
            'kana2' => 'required',
            'sex' => 'required',
            'post1' => 'required',
            'post2' => 'required',
            'address1' => 'required',
            'address2' => 'required',
            'member' => 'required',
            'ceigyou' => 'required',
            'cname' => 'required',
            'cpost1' => 'required',
            'cpost2' => 'required',
            'caddress1' => 'required',
            'caddress2' => 'required',
            'mail' => 'required',
            'tel1' => 'required',
            'tel2' => 'required',
            'tel3' => 'required',
            'fax1' => 'required',
            'fax2' => 'required',
            'fax3' => 'required',
        ];
    }

}
