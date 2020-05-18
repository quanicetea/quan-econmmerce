<?php

namespace Modules\Api\Http\Controllers\Api;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Modules\Api\Http\Controllers\Api\ApiResponse;


class ApiBaseController extends BaseController
{
	/**
 * @SWG\Swagger(
 *   schemes={"http"},
 *   basePath="",
 *   @SWG\Info(
 *     title="VMMS API",
 *     version="1.0.0"
 *   ),
 *   @SWG\SecurityScheme(
 *   securityDefinition="api_key",
 *   type="apiKey",
 *   in="header",
 *   name="Authorization"
 *  )
 * )
 */ 
    const ERR_APPI_KEY = 1001;
	const ERR_VALIDATION = 1002;
	const ERR_EMPTY = 1000;

	public $listErr = [
		self::ERR_APPI_KEY => 'Wrong api key.',
		self::ERR_VALIDATION => 'The given data was invalid.',
		self::ERR_EMPTY => 'Empty.',
	];

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, ApiResponse;
}
