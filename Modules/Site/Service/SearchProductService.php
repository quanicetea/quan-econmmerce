<?php 
namespace Modules\Site\Service;
use Illuminate\Http\Request;
use Modules\Product\Repositories\ProductRepository;

class SearchProductService{
    private $product;
    public function __construct(ProductRepository $product){
        $this->product = $product;
    }
    public function searchProducts(Request $request){
        $products = $this->product->searchProducts($request);
        return $products;
    }
} 