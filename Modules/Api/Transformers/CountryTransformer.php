<?php

namespace Modules\Api\Transformers;

use Illuminate\Http\Resources\Json\Resource;

class CountryTransformer extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
    		'id' => $this->id,
    		'name' => $this->country_name,
    		'code' => $this->country_code,
    		
    	];
    }
}
