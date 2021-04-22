<?php

namespace App\Http\Requests\Admin\Food;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFoodRequest extends FormRequest
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
            'name' => ['required'],
            'system_name' => ['required'],
            'score' => ['required', 'integer'],
            'country_id' => ['required', 'integer'],
            'point_id' => ['required', 'integer'],
        ];
    }
}
