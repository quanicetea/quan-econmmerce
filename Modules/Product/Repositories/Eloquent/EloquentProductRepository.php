<?php

namespace Modules\Product\Repositories\Eloquent;

use Modules\Product\Repositories\ProductRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;
use Modules\Product\Entities\Product;
// use Modules\Manufacturer\Repositories\ManufacturerRepository;
use Modules\Manufacturer\Entities\Manufacturer;
use Auth;
class EloquentProductRepository extends EloquentBaseRepository implements ProductRepository
{
    // private $manufacturer;
    // public function __construct(ManufacturerRepository $manufacturer){
    //     $this->manufacturer = $manufacturer;
    // }
    public function getData($request){
        $products = $this->model->orderBy('id','DESC')->with('category')->with('manufacturer')->with('getUnit');
            if($request->category){
                $products->where('category_id', $request->category);
            }
        // $owner = Auth::user();
        // if($owner->id==1){
        //     $products = $this->model->orderBy('id','DESC')->with('category')->with('manufacturer')->with('getUnit');
        //     if($request->category){
        //         $products->where('category_id', $request->category);
        //     }
        // }else{
        //     $products = $this->model->orderBy('id','DESC')->with('category')->where('user_id',$owner->id);
        //     if($request->category){
        //         $products->where('category_id', $request->category);
        //     }
        // }
        
        return $products;
    }
    public function getNewProducts(){
        $products = Product::take(8)->get();
        return $products;
    }
    public function searchProducts($request){
        // $products = Product::where('name','like',"%$request->search_key%")->where('manufacturer_id',1);
                    
        if($request->manufacturer!=null){
            // dd($request->manufacturer);
            foreach($request->manufacturer as $manufacturer){
                $manu = Manufacturer::where('slug',$manufacturer)->first();
                $products = Product::where('name','like',"%$request->search_key%")->where('manufacturer_id',$manu->id);
                // dd($products->get());
            }
        }else{
            // dd($manufacturer);
            $products = Product::where('name','like',"%$request->search_key%");
        }
        return $products->get();;
    }
}
