<?php

namespace Modules\Category\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class CreateCategoryRequest extends BaseFormRequest
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
            'name.required' => trans('category::categories.messages.name.required'),
            'slug.required' => trans('category::categories.messages.slug.required'),
        ];
    }

    public function translationMessages()
    {
        return [];
    }
}
