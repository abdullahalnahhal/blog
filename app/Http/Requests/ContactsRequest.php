<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsRequest extends FormRequest
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
          'email' => 'required|email',
          'mobile' => 'required',
          'facebook' => 'required|url',
          'twitter' => 'required|url',
          'instagram' => 'required|url',
          'lat' => 'numeric|required',
          'lon' => 'numeric|required',
          'address' => 'required',
        ];
    }
    public function messages()
    {
        return [
          'email.required' => 'messages.Slide Title Can\'t Be More Than 100 Chars',
          'email.email' => 'messages.Slide Title Can\'t Be More Than 100 Chars',
          'facebook.required' => 'messages.Slide Title Can\'t Be More Than 100 Chars',
          'twitter.required' => 'messages.Slide Title Can\'t Be More Than 100 Chars',
          'instagram.required' => 'messages.Slide Title Can\'t Be More Than 100 Chars',
          'facebook.url' => 'messages.Slide Title Can\'t Be More Than 100 Chars',
          'twitter.url' => 'messages.Slide Title Can\'t Be More Than 100 Chars',
          'instagram.url' => 'messages.Slide Title Can\'t Be More Than 100 Chars',
          'lat.required' => 'messages.Slide Title Can\'t Be More Than 100 Chars',
          'lon.required' => 'messages.Slide Title Can\'t Be More Than 100 Chars',
          'lat.numeric' => 'messages.Slide Title Can\'t Be More Than 100 Chars',
          'lon.numeric' => 'messages.Slide Title Can\'t Be More Than 100 Chars',
          'address.required' => 'messages.Slide Title Can\'t Be More Than 100 Chars',

        ];
    }
}
