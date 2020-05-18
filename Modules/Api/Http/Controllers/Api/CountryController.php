<?php

namespace Modules\Api\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Country\Repositories\CountryRepository;
use Modules\Api\Transformers\CountryTransformer;
use Modules\Country\Entities\Country;

class CountryController extends ApiBaseController
{
    private $country;

    public function __construct(CountryRepository $country)
    {
        $this->country = $country;
    }
    /**
     * Display a listing of the resource.
     * @return Response
     */

    /**
     * @SWG\Get(
     *   path="/api/countries",
     *   description="",
     *   summary="",
     *   operationId="api.countries",
     *   produces={"application/json"},
     *   tags={"Country"},
     *   description="Target List Country | Authorization value: Bearer (Your access_token key in CMS) ",
     * *   @SWG\Response(response=401, description="unauthorized"),
     *   @SWG\Response(response=200, description="Success"),
     *   security={
     *       {"api_key": {}}
     *   }
     * )
     */
    public function index()
    {
        $country = $this->country->all();
        $data = CountryTransformer::collection($country);
        return $this->respondWithSuccess($data,"Get countries Success");
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */

    /**
     * @SWG\Post(
     *   path="/api/countries/create",
     *   description="Create a Country",
     *   summary="",
     *   operationId="api.countries.create",
     *   produces={"application/json"},
     *   tags={"Country"},
     *   description="Target Create a Country | Authorization value: Bearer (Your Access_token key in CMS) ",
    *   @SWG\Parameter(
     *     name="body",
     *     in="body",
     *     description="Target Create a Country | Authorization value: Bearer (Your Access_token key in CMS) ",
     *     required=true,
     *    @SWG\Schema(ref="#/definitions/Country")
     *   ),
     *   @SWG\Response(response=401, description="unauthorized"),
     *   @SWG\Response(response=200, description="Success"),
     *   security={
     *       {"api_key": {}}
     *   }
     * )
     */
    public function store(Request $request)
    {
        $country = $this->country->create($request->all());
        $data = new CountryTransformer($country);
        return $this->respondWithSuccess($data,"Create country Success");
    }

     /**
     * @SWG\Get(
     *   path="/api/countries/detail",
     *   description="",
     *   summary="",
     *   operationId="api.countries.show",
     *   produces={"application/json"},
     *   tags={"Country"},
     *   description="Target Detail Country | Authorization value: Bearer (Your access_token key in CMS) ",
     * @SWG\Parameter(
    *     name="id",
    *     in="query",
    *     description="Country ID",
    *     required=true,
    *     type="integer"
    *   ),
     * *   @SWG\Response(response=401, description="unauthorized"),
     *   @SWG\Response(response=200, description="Success"),
     *   security={
     *       {"api_key": {}}
     *   }
     * )
     */
    public function show(Request $request)
    {
        $country = $this->country->findByAttributes(['id'=>$request->id]);
        if($country){
            $data = new CountryTransformer($country);
            return $this->respondWithSuccess($data,"");
        }
        return $this->respondWithErrorCustom($this::ERR_EMPTY, $this->listErr[$this::ERR_EMPTY]);
    }


    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */

     /**
     * @SWG\Put(
     *   path="/api/countries/update",
     *   description="Update a Country",
     *   summary="",
     *   operationId="api.countries.update",
     *   produces={"application/json"},
     *   tags={"Country"},
     *   description="Target Update a Country | Authorization value: Bearer (Your Access_token key in CMS) ",
    *   @SWG\Parameter(
     *     name="body",
     *     in="body",
     *     description="Target Update a Country | Authorization value: Bearer (Your Access_token key in CMS) ",
     *     required=true,
     *    @SWG\Schema(ref="#/definitions/UpdateCountry")
     *   ),
     *   @SWG\Response(response=401, description="unauthorized"),
     *   @SWG\Response(response=200, description="Success"),
     *   security={
     *       {"api_key": {}}
     *   }
     * )
     */
    
    public function update(Request $request)
    {
        $country = $this->country->findByAttributes(['id'=>$request->id]);
        if($country){
            $result = $this->country->update($country,['country_code'=>$request->country_code,"country_name"=>$request->country_name]);
            $data = new CountryTransformer($result);
            return $this->respondWithSuccess($data,"Update country Success");
        }
        return $this->respondWithErrorCustom($this::ERR_EMPTY, $this->listErr[$this::ERR_EMPTY]);
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */

     /**
     * @SWG\Delete(
     *   path="/api/countries/delete",
     *   description="",
     *   summary="",
     *   operationId="api.countries.destroy",
     *   produces={"application/json"},
     *   tags={"Country"},
     *   description="Target Delete a Country | Authorization value: Bearer (Your access_token key in CMS) ",
     * @SWG\Parameter(
    *     name="id",
    *     in="query",
    *     description="Country ID",
    *     required=true,
    *     type="integer"
    *   ),
     * *   @SWG\Response(response=401, description="unauthorized"),
     *   @SWG\Response(response=200, description="Success"),
     *   security={
     *       {"api_key": {}}
     *   }
     * )
     */
    public function destroy(Request $request)
    {
        $country = $this->country->findByAttributes(['id'=>$request->id]);
        if($country){
            $data = new CountryTransformer($country);
        $country->delete();
        return $this->respondWithSuccess($data,"Delete country Success");
        }
        return $this->respondWithErrorCustom($this::ERR_EMPTY, $this->listErr[$this::ERR_EMPTY]);
    }
}
