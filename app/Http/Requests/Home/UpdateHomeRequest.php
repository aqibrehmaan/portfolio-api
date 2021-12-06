<?php

namespace App\Http\Requests\Home;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHomeRequest extends FormRequest
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
            'before_name' => 'required',
            'name' => 'required',
            'after_name' => 'required',
            'description' => 'required',
            'fb_link' => 'required',
            'insta_link' => 'required',
            'linkedin_link' => 'required',
            'twitter_link' => 'required'
        ];
    }
}
