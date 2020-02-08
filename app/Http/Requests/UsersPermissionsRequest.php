<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersPermissionsRequest extends FormRequest
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
          'name' => 'required|unique:roles,name|max:200|min:5',
          'slug' => 'required|unique:roles,slug|max:200|min:5',
          'permissions' => 'required|array',
        ];
    }
    public function messages()
    {
        return [
          'name.required' => 'messages.Role Name Must be filled',
          'slug.required' => 'messages.Role Slug Must be Filled',
          'permissions.required' => 'messages.Permissions Must be filled',

          'name.unique' => 'messages.Role Name Must be Unique',
          'slug.unique' => 'messages.Role Name Must be Unique',

          'permissions.array' => 'messages.Permissions Must Not be Array',


        ];
    }
}
