<?php

namespace Modules\Manufacturer\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class UpdateManufacturerRequest extends BaseFormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'slug' => 'required'
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
            'name.required' => trans('manufacturer::manufacturers.messages.name.required'),
            'slug.required' => trans('manufacturer::manufacturers.messages.slug.required'),
        ];
    }

    public function translationMessages()
    {
        return [];
    }
}
