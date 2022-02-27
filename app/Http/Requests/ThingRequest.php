<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThingRequest extends FormRequest
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
            'thing.name' => 'required|string|max:100',
            'thing.price' => 'required|integer|max:100',
            'thing.rank' => 'required|integer|max:10',
        ];
    }
}

          
    