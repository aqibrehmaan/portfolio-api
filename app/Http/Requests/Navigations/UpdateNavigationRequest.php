<?php

namespace App\Http\Requests\Navigations;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateNavigationRequest extends FormRequest
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
            'name' => ['required','max:100', Rule::unique('navigations')->ignore($this->navigation->id, 'id')],
            'link' => 'required|max:50'
        ];
    }
}
