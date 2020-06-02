<?php

namespace Modules\Api\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Api\Entities\Api;
use Modules\Api\Http\Requests\CreateApiRequest;
use Modules\Api\Http\Requests\UpdateApiRequest;
use Modules\Api\Repositories\ApiRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class ApiController extends AdminBaseController
{
    /**
     * @var ApiRepository
     */
    private $api;

    public function __construct(ApiRepository $api)
    {
        parent::__construct();

        $this->api = $api;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$apis = $this->api->all();

        return view('api::admin.apis.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('api::admin.apis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateApiRequest $request
     * @return Response
     */
    public function store(CreateApiRequest $request)
    {
        $this->api->create($request->all());

        return redirect()->route('admin.api.api.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('api::apis.title.apis')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Api $api
     * @return Response
     */
    public function edit(Api $api)
    {
        return view('api::admin.apis.edit', compact('api'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Api $api
     * @param  UpdateApiRequest $request
     * @return Response
     */
    public function update(Api $api, UpdateApiRequest $request)
    {
        $this->api->update($api, $request->all());

        return redirect()->route('admin.api.api.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('api::apis.title.apis')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Api $api
     * @return Response
     */
    public function destroy(Api $api)
    {
        $this->api->destroy($api);

        return redirect()->route('admin.api.api.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('api::apis.title.apis')]));
    }

    public function uploadImage(Request $request){
        $file = $request->file('uploadfile');
        if(isset($file) && $file ){
            $url = $this->uploadFile($file,'images');
            // return $url;
            return \URL::to('/') .$url;
        }
    }
    protected function uploadFile($file,$folderName)
    {
        $s3 = \Storage::disk('local');
        $time = time();
        $fileName = preg_replace('/\s+/', '', $file->getClientOriginalName());
        // $fileNameArr = explode('.', $fileName);
        // $fileNameCustom = $fileNameArr[0] .'_'. $time .'.'. $fileNameArr[1];
        $fileNameCustom = md5(rand()) .'_'. $time .'.jpg';
        $filePath = 'public/assets/'.$folderName.'/' . $fileNameCustom;
        $url = '/assets/'.$folderName.'/'. $fileNameCustom;
        $result = $s3->put($filePath, file_get_contents($file),'public');
        if($result)
        {
            return $url;
        }
        return null; 
    }
}
