<?php

namespace Modules\Product\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Product\Entities\Product;
use Modules\Product\Http\Requests\CreateProductRequest;
use Modules\Product\Http\Requests\UpdateProductRequest;
use Modules\Product\Repositories\ProductRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;
use Modules\Category\Repositories\CategoryRepository;
use Modules\Unit\Repositories\UnitRepository;
use Yajra\DataTables\DataTables;
use Auth;


class ProductController extends AdminBaseController
{
    /**
     * @var ProductRepository
     */
    private $product;
    /**
     * @var CategoryRepository
     */
    private $category;
    /**
     * @var UnitRepository
     */
    private $unit;

    public function __construct(ProductRepository $product, CategoryRepository $category, UnitRepository $unit)
    {
        parent::__construct();

        $this->product = $product;
        $this->category = $category;
        $this->unit = $unit;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$products = $this->product->all();
        $categories = $this->category->all();
        return view('product::admin.products.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $user = Auth::user();
        $categories = $this->category->all();
        $unit = $this->unit->all();
        return view('product::admin.products.create', compact('categories', 'unit','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateProductRequest $request
     * @return Response
     */
    public function store(CreateProductRequest $request)
    {
        $this->product->create($request->all());

        return redirect()->route('admin.product.product.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('product::products.title.products')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Product $product
     * @return Response
     */
    public function edit(Product $product)
    {
        $categories = $this->category->all();
        $units = $this->unit->all();
        return view('product::admin.products.edit', compact('product','categories','units'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Product $product
     * @param  UpdateProductRequest $request
     * @return Response
     */
    public function update(Product $product, UpdateProductRequest $request)
    {
        $this->product->update($product, $request->all());

        return redirect()->route('admin.product.product.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('product::products.title.products')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Product $product
     * @return Response
     */
    public function destroy(Product $product)
    {
        $this->product->destroy($product);

        return redirect()->route('admin.product.product.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('product::products.title.products')]));
    }
    
    public function uploadImage(Request $request){

        $file = $request->file('uploadfile');
        if(isset($file) && $file ){
            $url = $this->uploadFile($file,'images');
            // return \URL::to('/') .$url;

            return $url;
        }
    }

    public function test(){
        dd(1);
    }

    public function datatable(Request $request){

        $product = $this->product->getData($request);
        
        return DataTables::of($product)
            // ->editColumn('name',function($item){
            //     return $item->name.' '.$item->category->name;
            // })
            ->editColumn('category', function ($item){ 
                return $item->category->name??"";
            })
            ->editColumn('manufacturer', function ($item){ 
                return $item->manufacturer->name??"";
            })
            ->editColumn('unit', function ($item){ 
                return $item->getUnit->unit??"";
            })
            ->addColumn('status', function ($item){ 
                return ($item->status == Product::ACTIVE) ? '<span class="label label-success">'. trans('product::products.form.active') .'</span>' : '<span class="label label-default">'.trans('product::products.form.unactive').'</span>';
            })
            ->addColumn('action', function ($item) {
                return '<div class="btn-group">
                        <a href="'. route('admin.product.product.edit', [$item->unique_id]) .'" class="btn btn-default btn-flat"><i class="fa fa-pencil"></i></a>
                        <button class="btn btn-danger btn-flat" data-toggle="modal" data-target="#modal-delete-confirmation" data-action-target="'. route('admin.product.product.destroy', [$item->unique_id]) .'"><i class="fa fa-trash"></i></button>
                    </div>';
            })
            ->rawColumns(['action','status'])->make(true);
    }
}
