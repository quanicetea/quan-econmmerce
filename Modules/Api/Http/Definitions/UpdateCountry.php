<?php
namespace  Modules\Api\Http\Definitions;
/**
 * @SWG\Definition(type="object", @SWG\Xml(name="Login"))
 */
class UpdateCountry
{
    /**
     * @SWG\Property(format="int64",example=1)
     * @var string
     */
    public $id;
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