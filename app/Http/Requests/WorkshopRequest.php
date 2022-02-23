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
            'no' => 'required',
         //   'ken' => 'required',
            'syusai' => 'required',
            'kyousai' => 'required',
            'sien' => 'required',
            'nittei1' => 'required',
            'ampm' => 'required',
            'nittei2' => 'required',
            'nittei3' => 'required',
            'kaizyou1' => 'required',
            'kaizyou3' => 'required',
            'kaizyou4' => 'required',
            'kaizyou2' => 'required',
            'tizu' => 'required',
            'teiin' => 'required',
            'teiin2' => 'required',
            'zyk' => 'required',
            'uketuke1' => 'required',
            'uketuke2' => 'required',
            'mscu' => 'required',
            'zys' => 'required',
            'kingaku1' => 'required',
            'kingaku2' => 'required',
            'khurikomi' => 'required',
            'kigen' => 'required',
            'kfax' => 'required',
            'kemail' => 'required',
            'kousi' => 'required',
            'naiyou' => 'required',
        ];
    }

}
