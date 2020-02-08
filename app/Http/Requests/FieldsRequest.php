<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FieldsRequest extends FormRequest
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
          'title' => 'required|unique:fields,title|max:200',
          'content' => 'required',
          'icon' => 'required',
          'field_id' => 'nullable|exists:fields,id',

        ];
    }
    public function messages()
    {
        return [
          'title.required' => 'messages.Field Title Must Be Filled First',
          'title.unique' => 'messages.Field Title Exists Before',
          'title.max' => 'messages.Field Title Can\'t be More Than 200 Chars',
          'content.required' => 'messages.Field Content Must Be Filled First',
          'icon.required' => 'messages.Field Icon Must Be Selected First',
          'field_id.exists' => 'messages.These Parent Field Doesn\'t Exist',
        ];
    }
}
