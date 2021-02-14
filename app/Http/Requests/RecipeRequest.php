<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecipeRequest extends FormRequest
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
            //TODO:バリデーションの内容そのものを考える
            'title'=> '',
            'description'=>'',
            'total_energy'=>'',
            'food'=>'',
            'amount_to_use'=>'',
            'unit'=>'',
            'step'=>'',
            'comment'=>''
        ];
    }
}
