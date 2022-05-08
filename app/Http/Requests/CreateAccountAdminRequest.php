<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateAccountAdminRequest extends FormRequest
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
        $rules = [
            'name' => 'required|max:255',
            'mail_address' => 'email|unique:employees|max:100',
            'address' => 'max:255',
            'phone' => 'numeric|digits_between:9,15',
            'birth_date' => 'required',
            'role' => 'required',
            'password' => 'required|max:255',
            'password_confirmation' => 'required|same:password'
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $idUser = $this->route()->parameter('id');
            $rules = [
                'name' => 'required|max:255',
                'address' => 'max:255',
                'phone' => 'numeric|digits_between:9,15',
                'birth_date' => 'required',
                'role' => 'required',
                'password' => 'max:255',
                'password_confirmation' => 'same:password'
            ];
            $rules['mail_address'] = [
                'email',
                'max:100',
                Rule::unique('employees','mail_address')->ignore($idUser)
            ];
        }
        return $rules;
    }
}
