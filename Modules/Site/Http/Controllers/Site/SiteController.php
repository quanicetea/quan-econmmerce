<?php

namespace Modules\Site\Http\Controllers\Site;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Category\Repositories\CategoryRepository;
use Modules\Product\Repositories\ProductRepository;
use Modules\Product\Entities\Product;
use Modules\Category\Entities\Category;
use Cart;
use Modules\Site\Service\CartService;
use Modules\Site\Service\CreateCustomerService;
use Modules\Site\Service\CreateOrderService;
use Modules\Site\Service\CreateOrderDetailService;
use Modules\Customer\Entities\Customer;
use Modules\Order\Entities\Order;
use Carbon\Carbon;

class SiteController extends Controller
{

    private $category;
    private $product;
    private $cartService;
    private $customerService;
    private $orderService;
    private $orderDetailService;
    public function __construct(CategoryRepository $category,ProductRepository $product,CartService $cartService,CreateCustomerService $customerService,CreateOrderService $orderService,CreateOrderDetailService $orderDetailService){
        $this->category = $category;
        $this->product = $product;
        $this->cartService = $cartService;
        $this->customerService = $customerService;
        $this->orderService = $orderService;
        $this->orderDetailService = $orderDetailService;
    }
    public function index()
    {   
        // $now = Carbon::now();
        // $year = $now->year;
        // $month = $now->month;
        // $day = $now->day;
        // $minute = $now->minute;
        // $second = $now->second;
        // $code = $year.$month.$day.$minute.$second;
        // dd($code);
        // $category = Category::all();
        // dd($category);
        // $categories = $this->category->all();
        $products = $this->product->getNewProducts();
        
        return view('site::site.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('site::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }


    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('site::edit');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }

    public function cartEmpty(){
        return view('site::site.cart_empty');
    }

    public function cart(){

        $cart = Cart::content();
        $subtotal = Cart::subtotal(0,'.',',');
        return view('site::site.cart',compact('cart','subtotal'));
    }

    // show ra page nhập thông tin 
    public function checkout(){
        return view('site::site.checkout');
    }

    //tạo customer ở đây
    public function postcheckout(Request $request){
        $cart = Cart::content();
        $subtotal = Cart::subtotal(0,'.',',');
        $total = Cart::total(0,'.',',');
        $vat = Cart::tax(0,'.',',');
        $vat_percent = config('cart.tax');
        $customer = $this->customerService->createCustomer($request);
        return view('site::site.confirm',compact('customer','cart','subtotal','total','vat','vat_percent'));
    }

    //trang xác nhận trước khi tạo order
    public function confirm(Request $request){
        $cart = Cart::content();
        $subtotal = Cart::subtotal(0,'.',',');
        $total = Cart::total(0,'.',',');
        $vat = Cart::tax(0,'.',',');
        $vat_percent = config('cart.tax');
        $customer = $this->customerService->createCustomer($request);
        return view('site::site.confirm',compact('customer','cart','subtotal','total','vat','vat_percent'));
    }

    //tạo 1 order (bao gồm tạo customer và order_detail)
    public function order(Request $request){

        $cartItems = Cart::content();

        $customer = Customer::where('phone_number',$request->phone_number)->first();

        $order = $this->orderService->createOrder($customer,$request);
        // dd($order->id);

        $orderDetails = $this->orderDetailService->createOrderDetail($order,$cartItems);
        $order_code = $order->order_code;
        $order_email = $order->email;
        return redirect()->route('site.success',compact('order_code','order_email'));
    }
    public function success(Request $request){
        $order_code = $request->order_code;
        $order_email = $request->order_email;
        Cart::destroy();
        return view('site::site.success',compact('order_code','order_email'));
    }

    public function productByCateGory(){
        return view('site::site.product_by_category');
    }

    public function show()
    {
        return response()->json([
            'detail' => Cart::content(),
            'count' => Cart::count(),
            'total' => Cart::subtotal(0, '','')
        ]);
    }

    //thêm 1 sp vào giỏ hàng
    public function add(Request $request)
    {
        $product = $this->product->findByAttributes(['unique_id' => $request->product_id]);
        $this->cartService->addProductToCart($product, 1);
        return $this->show();
    }

    // update số lượng sản phẩm trong giỏ hàng
    public function update(Request $request)
    {   
        $product = $this->product->findByAttributes(['unique_id' => $request->product_id]);
        $this->cartService->addProductToCart($product, $request->qty);
        return $this->show();
    }
    // xoá sản phẩm khỏi giỏ hàng
    public function remove(Request $request)
    {
        $product = $this->product->findByAttributes(['unique_id' => $request->product_id]);
        $this->cartService->removeFromCard($product);
        // dd(Cart::content());
        return $this->show();
    }


    
    //ajax lấy api tỉnh thành quận huyện phường xã

    public function city(){
        $curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => 0,
			CURLOPT_URL => 'https://thongtindoanhnghiep.co/api/city',
			CURLOPT_USERAGENT => 'Thái Bảo Quân Call Api City',
			CURLOPT_SSL_VERIFYPEER => false
		));
		$resp = curl_exec($curl);
        curl_close($curl);
        
    }
}
