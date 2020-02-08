<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderUpdateRequest extends FormRequest
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
          'title' => 'nullable|max:100',
          'slide' => 'nullable|image',
          'content' => 'required|max:500',
          'link_text' => 'nullable|required_with:link|max:50',
          'link' => 'nullable|required_with:link_text|url',
        ];
    }
    public function messages()
    {
        return [
          'title.max' => 'messages.Slide Title Can\'t Be More Than 100 Chars',
          'slide.required' => 'messages.Slide Image Must Be Filled First',
          'slide.image' => 'messages.Slide Must Be In Image Format (jpeg, png, bmp, gif, or svg)',
          'content.required' => 'messages.Slide Content Must Be Filled First',
          'content.max' => 'messages.Slide Content Must Not Be More Than 500 Chars',
          'link_text.required_with' => 'messages.Link Must Be Filled First',
          'link_text.max' => 'messages.Link Text Must Not Be More Than 50 Chars',
          'link.required_with' => 'messages.Link Text Must Be Filled First',
          'link.url' => 'messages.Link Must Be Valid URL (host@domain.dest)',
        ];
    }
}
