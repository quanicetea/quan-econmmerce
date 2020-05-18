<?php

namespace Modules\Country\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Country\Entities\QuocGia;
use Modules\Country\Http\Requests\CreateQuocGiaRequest;
use Modules\Country\Http\Requests\UpdateQuocGiaRequest;
use Modules\Country\Repositories\QuocGiaRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class QuocGiaController extends AdminBaseController
{
    /**
     * @var QuocGiaRepository
     */
    private $quocgia;

    public function __construct(QuocGiaRepository $quocgia)
    {
        parent::__construct();

        $this->quocgia = $quocgia;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$quocgias = $this->quocgia->all();

        return view('country::admin.quocgias.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('country::admin.quocgias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateQuocGiaRequest $request
     * @return Response
     */
    public function store(CreateQuocGiaRequest $request)
    {
        $this->quocgia->create($request->all());

        return redirect()->route('admin.country.quocgia.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('country::quocgias.title.quocgias')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  QuocGia $quocgia
     * @return Response
     */
    public function edit(QuocGia $quocgia)
    {
        return view('country::admin.quocgias.edit', compact('quocgia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  QuocGia $quocgia
     * @param  UpdateQuocGiaRequest $request
     * @return Response
     */
    public function update(QuocGia $quocgia, UpdateQuocGiaRequest $request)
    {
        $this->quocgia->update($quocgia, $request->all());

        return redirect()->route('admin.country.quocgia.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('country::quocgias.title.quocgias')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  QuocGia $quocgia
     * @return Response
     */
    public function destroy(QuocGia $quocgia)
    {
        $this->quocgia->destroy($quocgia);

        return redirect()->route('admin.country.quocgia.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('country::quocgias.title.quocgias')]));
    }
}
