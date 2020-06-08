<?php

namespace Modules\Manufacturer\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Manufacturer\Entities\Manufacturer;
use Modules\Manufacturer\Http\Requests\CreateManufacturerRequest;
use Modules\Manufacturer\Http\Requests\UpdateManufacturerRequest;
use Modules\Manufacturer\Repositories\ManufacturerRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Yajra\DataTables\DataTables;

class ManufacturerController extends AdminBaseController
{
    /**
     * @var ManufacturerRepository
     */
    private $manufacturer;

    public function __construct(ManufacturerRepository $manufacturer)
    {
        parent::__construct();

        $this->manufacturer = $manufacturer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$manufacturers = $this->manufacturer->all();

        return view('manufacturer::admin.manufacturers.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('manufacturer::admin.manufacturers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateManufacturerRequest $request
     * @return Response
     */
    public function store(CreateManufacturerRequest $request)
    {
        $this->manufacturer->create($request->all());

        return redirect()->route('admin.manufacturer.manufacturer.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('manufacturer::manufacturers.title.manufacturers')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Manufacturer $manufacturer
     * @return Response
     */
    public function edit(Manufacturer $manufacturer)
    {
        return view('manufacturer::admin.manufacturers.edit', compact('manufacturer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Manufacturer $manufacturer
     * @param  UpdateManufacturerRequest $request
     * @return Response
     */
    public function update(Manufacturer $manufacturer, UpdateManufacturerRequest $request)
    {
        $this->manufacturer->update($manufacturer, $request->all());

        return redirect()->route('admin.manufacturer.manufacturer.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('manufacturer::manufacturers.title.manufacturers')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Manufacturer $manufacturer
     * @return Response
     */
    public function destroy(Manufacturer $manufacturer)
    {
        $this->manufacturer->destroy($manufacturer);

        return redirect()->route('admin.manufacturer.manufacturer.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('manufacturer::manufacturers.title.manufacturers')]));
    }

    public function datatable(Request $request){
        $manufacturer = $this->manufacturer->getData();
        return DataTables::of($manufacturer)
            ->addColumn('action', function ($manufacturer) {
                return '<div class="btn-group">
                            <a href="'. route('admin.manufacturer.manufacturer.edit', [$manufacturer->id]) .'" class="btn btn-default btn-flat"><i class="fa fa-pencil"></i></a>
                            <button class="btn btn-danger btn-flat" data-toggle="modal"
                                data-target="#modal-delete-confirmation"
                                data-action-target="' . route('admin.manufacturer.manufacturer.destroy', [$manufacturer->id]) . '" title="'.trans('manufacturer::manufacturers.button.delete').'">
                            <i class="fa fa-trash"></i></button>
                            </div>';
            })
            ->rawColumns(['action'])->make(true);
    }
}
