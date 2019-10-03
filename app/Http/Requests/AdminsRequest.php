<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminsRequest extends FormRequest
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
          'name' => 'required|string',
          'username' => 'required|string|unique:users,email',
          'password' => 'required|string|same:password_confirm',
          'password_confirm' => 'required',
        ];
    }
    public function messages()
    {
        return [
          'name.required' => 'messages.Name Must Be Filled First',
          'username.required' => 'messages.User Name Must Be Filled First ',
          'password.required' => 'messages.Password Must Be Filled First',
          'password_confirm.required' => 'messages.Password Confirmation Must Be Filled First',
          'username.unique' => 'messages.These User Name Taken Before, User Name Must Be Unique',
          'password.same' => 'messages.Password Must Match The Confirm Field',
        ];
    }
}
