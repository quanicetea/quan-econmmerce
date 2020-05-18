<?php

namespace Modules\Site\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Site\Entities\Site;
use Modules\Site\Http\Requests\CreateSiteRequest;
use Modules\Site\Http\Requests\UpdateSiteRequest;
use Modules\Site\Repositories\SiteRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class SiteController extends AdminBaseController
{
    /**
     * @var SiteRepository
     */
    private $site;

    public function __construct(SiteRepository $site)
    {
        parent::__construct();

        $this->site = $site;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$sites = $this->site->all();

        return view('site::admin.sites.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('site::admin.sites.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateSiteRequest $request
     * @return Response
     */
    public function store(CreateSiteRequest $request)
    {
        $this->site->create($request->all());

        return redirect()->route('admin.site.site.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('site::sites.title.sites')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Site $site
     * @return Response
     */
    public function edit(Site $site)
    {
        return view('site::admin.sites.edit', compact('site'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Site $site
     * @param  UpdateSiteRequest $request
     * @return Response
     */
    public function update(Site $site, UpdateSiteRequest $request)
    {
        $this->site->update($site, $request->all());

        return redirect()->route('admin.site.site.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('site::sites.title.sites')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Site $site
     * @return Response
     */
    public function destroy(Site $site)
    {
        $this->site->destroy($site);

        return redirect()->route('admin.site.site.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('site::sites.title.sites')]));
    }
}
