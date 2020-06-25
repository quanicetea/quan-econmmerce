<?php

namespace Modules\Site\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class LoginRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'login_email'=>'email|required',
            'login_password' => 'required'
            
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
