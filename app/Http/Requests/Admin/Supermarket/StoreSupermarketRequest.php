<?php

namespace App\Http\Requests\Admin\Supermarket;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupermarketRequest extends FormRequest
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
            'name' => 'required',
            'location' => 'required',
            'country_id' => 'required',
        ];
    }
}
