<?php

namespace Modules\Product\Http\Requests;

use Modules\Core\Internationalisation\BaseFormRequest;

class CreateProductRequest extends BaseFormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'required'
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
            'name.required' => trans('product::products.messages.name.required'),
            'price.required' => trans('product::products.messages.price.required'),
            'price.numeric' => trans('product::products.messages.price.numeric'),
        ];
    }

    public function translationMessages()
    {
        return [];
    }
}
