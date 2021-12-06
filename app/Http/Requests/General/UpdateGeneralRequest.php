<?php

namespace App\Http\Requests\General;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGeneralRequest extends FormRequest
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
            'website_title' => 'required|max:100',
            'logo_image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ];
    }
}
