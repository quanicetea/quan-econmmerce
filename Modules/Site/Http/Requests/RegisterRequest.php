<?php

namespace Modules\Site\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class RegisterRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name'=>'required',
            'last_name' => 'required',
            'email' => 'required|unique:users|email',
            'phone' => 'required',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
            'address' => 'required'
            
        ];
    }
    public function messages()
    {
        return [];
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
