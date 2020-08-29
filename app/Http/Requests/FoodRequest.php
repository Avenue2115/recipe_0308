<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'energy'=> 'required|integer',
            'protein'=> 'required|integer',
            'lipid'=> 'required|integer',
            'carbohydrate'=> 'required|integer',
            'salt_equivalent'=> 'required|integer',
            'create_date'=> new DateTime(),
            'update_date'=> 'nullable'
        ];
    }
}
