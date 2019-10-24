<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
          'title' => 'required|max:200',
          'content' => 'required',
        ];
    }
    public function messages()
    {
        return [
          'title.required' => 'messages.About Section Title Must Be Filled First',
          'title.max' => 'messages.About Section Title Can\'t be More Than 200 Chars',
          'content.required' => 'messages.About Section Content Must Be Filled First',
        ];
    }
}
