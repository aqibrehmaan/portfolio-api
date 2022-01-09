<?php

namespace App\Http\Requests\Posts;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
           'title' => ['required','min:10','max:100', Rule::unique('posts')->ignore($this->post->id, 'id')],
           'video' => 'required',
           'description' => 'required',
           'category_id' => 'required|numeric'
        ];
    }
}
