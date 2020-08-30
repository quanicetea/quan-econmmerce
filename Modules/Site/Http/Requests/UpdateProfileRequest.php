<?php

namespace Modules\Site\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'user_first_name'=>'required',
            // 'user_last_name' => 'required',
            // 'user_phone' => 'required',
            // 'user_new_password' => 'min:6',
            // 'user_new_password_confirm' => 'same:password',
            // 'user_address' => 'required'
        ];
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
