<?php

namespace Modules\Unit\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Unit\Entities\Unit;
use Modules\Unit\Http\Requests\CreateUnitRequest;
use Modules\Unit\Http\Requests\UpdateUnitRequest;
use Modules\Unit\Repositories\UnitRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Yajra\DataTables\DataTables;

class UnitController extends AdminBaseController
{
    /**
     * @var UnitRepository
     */
    private $unit;

    public function __construct(UnitRepository $unit)
    {
        parent::__construct();

        $this->unit = $unit;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // $units = $this->unit->all();

        return view('unit::admin.units.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('unit::admin.units.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateUnitRequest $request
     * @return Response
     */
    public function store(CreateUnitRequest $request)
    {
        $this->unit->create($request->all());

        return redirect()->route('admin.unit.unit.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('unit::units.title.units')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Unit $unit
     * @return Response
     */
    public function edit(Unit $unit)
    {
        return view('unit::admin.units.edit', compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Unit $unit
     * @param  UpdateUnitRequest $request
     * @return Response
     */
    public function update(Unit $unit, UpdateUnitRequest $request)
    {
        $this->unit->update($unit, $request->all());

        return redirect()->route('admin.unit.unit.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('unit::units.title.units')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Unit $unit
     * @return Response
     */
    public function destroy(Unit $unit)
    {
        $this->unit->destroy($unit);

        return redirect()->route('admin.unit.unit.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('unit::units.title.units')]));
    }

    public function datatable(Request $request){
        $unit = $this->unit->getData();
        return DataTables::of($unit)
            ->addColumn('action', function ($unit) {
                return '<div class="btn-group">
                                        <a href="'. route('admin.unit.unit.edit', [$unit->id]) .'" class="btn btn-default btn-flat"><i class="fa fa-pencil"></i></a>
                                    </div>';
            })
            ->rawColumns(['action'])->make(true);
    }
}
