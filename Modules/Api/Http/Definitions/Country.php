<?php
namespace  Modules\Api\Http\Definitions;
/**
 * @SWG\Definition(type="object", @SWG\Xml(name="Login"))
 */
class Country
{
    /**
     * @SWG\Property(format="int64")
     * @var string
     */
    public $country_code;
    /**
     * @SWG\Property(format="int64")
     * @var string
     */
    public $country_name;
}