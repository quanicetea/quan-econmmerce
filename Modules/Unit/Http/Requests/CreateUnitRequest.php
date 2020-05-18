<?php

namespace Modules\Unit\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class CreateUnitRequest extends BaseFormRequest
{
    public function rules()
    {
        return [
            'unit' => 'required'
        ];
    }

    public function translationRules()
    {
        return [];
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'unit.required' => trans('unit::units.messages.unit.required'),
        ];
    }

    public function translationMessages()
    {
        return [];
    }
}
