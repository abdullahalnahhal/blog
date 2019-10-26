<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideosRequest extends FormRequest
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
          'link' => 'required|url',
          'description' => 'required|max:500',
          'field_id' => 'required|exists:fields,id',
        ];
    }
    public function messages()
    {
        return [
          'title.required' => 'messages.Gallery Image Title Must Be Filled First',
          'title.max' => 'messages.Gallery Image Title Can\'t Be More Than 100 Chars',
          'image.required' => 'messages.Gallery Image Must Be Filled First',
          'image.image' => 'messages.Gallery Image Must Be In Image Format (jpeg, png, bmp, gif, or svg)',
          'description.required' => 'messages.Gallery Image Description Must Be Filled First',
          'description.max' => 'messages.Gallery Image Description Must Not Be More Than 500 Chars',
          'field_id.required' => 'messages.Gallery Image Field Must Be Filled Selected First',
          'field_id.exists' => 'messages.These Field Doesn\'t Exist',
        ];
    }
}
