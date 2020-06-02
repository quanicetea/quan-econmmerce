<?php

namespace Modules\Product\Repositories\Eloquent;

use Modules\Product\Repositories\ProductRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;
use Modules\Product\Entities\Product;

class EloquentProductRepository extends EloquentBaseRepository implements ProductRepository
{
    public function getData($request){
        $products = $this->model->orderBy('id','DESC')->with('category');
        if($request->category){
            $products->where('category_id', $request->category);
        }
        return $products;
    }
    public function getNewProducts(){
        $products = Product::take(4)->get();
        return $products;
    }
}
