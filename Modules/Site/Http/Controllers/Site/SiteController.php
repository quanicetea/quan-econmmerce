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
use Illuminate\Support\Facades\Mail;
use Modules\Order\Repositories\OrderRepository;
use Modules\Site\Emails\SendOrderMail;
use Modules\Site\Service\SearchProductService;
use Modules\Manufacturer\Repositories\ManufacturerRepository;
use Modules\Customer\Repositories\CustomerRepository;
use Auth;
use Modules\Core\Http\Controllers\BasePublicController;
use Modules\Site\Http\Requests\LoginRequest;
use Modules\Site\Service\CreateOrderAdminService;
// use Modules\Site\Http\Requests\RegisterRequest;
use Modules\User\Http\Requests\RegisterRequest;
use Illuminate\Pagination\Paginator;
// use Illuminate\Contracts\Pagination\LengthAwarePaginator;
class SiteController extends BasePublicController
{
    private $order;
    private $category;
    private $product;
    private $cartService;
    private $customerService;
    private $orderService;
    private $orderDetailService;
    private $searchProductService;
    private $manufacturer;
    private $customer;
    private $orderAdminService;
    public function __construct(CreateOrderAdminService $orderAdminService,CustomerRepository $customer,ManufacturerRepository $manufacturer,SearchProductService $searchProductService,OrderRepository $order,CategoryRepository $category,ProductRepository $product,CartService $cartService,CreateCustomerService $customerService,CreateOrderService $orderService,CreateOrderDetailService $orderDetailService){
        parent::__construct();
        $this->category = $category;
        $this->product = $product;
        $this->cartService = $cartService;
        $this->customerService = $customerService;
        $this->orderService = $orderService;
        $this->orderDetailService = $orderDetailService;
        $this->order = $order;
        $this->searchProductService = $searchProductService;
        $this->manufacturer = $manufacturer;
        $this->customer = $customer;
        $this->orderAdminService = $orderAdminService;
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

        //tách bill
        // $cart = Cart::content();
        // $list_shop = array();
        // foreach($cart as $item){
        //     if (!in_array($item->options->user, $list_shop)){
        //         $list_shop[] = $item->options->user;
        //     }
        // }
        // dd($list_shop);

        $products = $this->product->getNewProducts();
        $user = Auth::user();
        // dd($user);
        $categories = $this->category->all();
        // dd($category);
        if($user){
            return view('site::site.index',compact('products','user','categories'));
        }else{
            return view('site::site.index',compact('products','categories'));
        }
        
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
        // dd(count($cart));
        if(count($cart)==0){
            return redirect()->route('site.cart');
        }
        $subtotal = Cart::subtotal(0,'.',',');
        $total = Cart::total(0,'.',',');
        $vat = Cart::tax(0,'.',',');
        $vat_percent = config('cart.tax');
        if(Auth::check()){
            $customer = Auth::user();
            // dd($customer);
            return view('site::site.confirm',compact('customer','cart','subtotal','total','vat','vat_percent'));
        }else{
            return redirect()->route('site.get.login');
        }
        // $customer = Auth::user();
        // dd($customer);
        // return view('site::site.confirm',compact('customer','cart','subtotal','total','vat','vat_percent'));
    }

    //tạo 1 order (bao gồm tạo customer và order_detail)
    public function order(Request $request){

        $cartItems = Cart::content();
        $customer = Auth::user();
        // $orderAdmin = $this->orderAdminService->createOrderAdmin($customer,$request);
        // dd($orderAdmin);
        // $customer = Customer::where('phone_number',$request->phone_number)->first();
    
        // $cart = Cart::content();
        // $list_shops = array();
        // foreach($cartItems as $item){
        //     if (!in_array($item->options->user, $list_shops)){
        //         $list_shops[] = $item->options->user;
        //     }
        // }
        
        $order = $this->orderService->createOrder($customer,$request);

        // foreach($list_shops as $shop){
        //     $subtotal=0;
        //     $order = $this->orderService->createOrder($customer,$request,$orderAdmin->id);
        //     $orderDetails = $this->orderDetailService->createOrderDetail($order,$cartItems,$shop->id);
        //     dd($orderDetails);
        //     foreach($orderDetails->product as $item){
        //         $subtotal += $item->quantity*$item->price;
        //     }
        //     $order->subtotal = $subtotal;
        //     $order->total = $subtotal;
        //     $order->save();
        // }
        
        $orderDetails = $this->orderDetailService->createOrderDetail($order,$cartItems);
        $order_code = $order->order_code;
        $order_email = $order->email;
        // dd($order->orderDetail);
        Mail::to($order_email)->send(new SendOrderMail($order));
        return redirect()->route('site.success',compact('order_code','order_email'));
    }
    public function success(Request $request){
        $order_code = $request->order_code;
        $order_email = $request->order_email;
        // $order = $this->order->findByAttributes(['order_code' => $order_code]);
        // dd($order);
        
        
        Cart::destroy();
        return view('site::site.success',compact('order_code','order_email'));
    }

    public function productByCateGory(Request $request)
    {
        $category = $this->category->findBySlug($request->slug);
        $products = Product::where('category_id','=',$category->id)->paginate(9);
        // $category = \DB::table('category')->paginate(15);
        // $category = Category::paginate(15);
        // dd($category);
        // $category = Category::where('slug', '=', $request->slug)->paginate(15);
        return view('site::site.product_by_category',compact('products','category'));
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

    public function search(Request $request){
        $request_manufacturers = $request->manufacturer??null;
        $search_key = $request->search_key??'';
        $products = $this->searchProductService->searchProducts($request);
        // $products->appends(Input::except('page'));
        return view('site::site.search',compact('products','search_key','request_manufacturers'));
        // return view('site::site.search')
    }

    // public function register(RegisterRequest $request){
    //     // dd($request->all());
    //     $this->customer->createCustomer($request->all());
    //     return redirect()->route('site.homepage');
    // }
    public function getLogin(){
        if(Auth::check()){
            return redirect()->route('site.homepage');
        }
        return view('site::site.login');
    }
    public function postLogin(LoginRequest $request){
        $credentials = [
            'email' => $request->login_email,
            'password' => $request->login_password,
        ];
        $remember = (bool) $request->get('remember_me', false);

        $error = $this->auth->login($credentials, $remember);
        if ($error) {
            return redirect()->back()->withInput()->withError($error);
        }
        return redirect()->back();
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->back();
    }

    public function getProfile(Request $request){
        //kiểm tra có đăng nhập
        if(Auth::check()){
            $customer_id = $request->id;
            $customer = $this->customer->find($customer_id);
            if(isset($customer)){
                return view('site::site.profile',compact('customer'));
            }
        }else{
            return redirect()->route('site.get.login');
        }
        
    }
    public function updateProfile(Request $request){
        // dd($request->all());
        $customer = $this->customer->updateCustomer($request->all());
        // dd(redirect()->back());
        return redirect()->back();
    }
    public function getForgotpassword(){
        return view('site::site.forgotpassword');
    }
    public function getRegister(){
        return view('site::site.register');
    }

    public function detail(Request $request){
        $product = $this->product->findByAttributes(['unique_id' => $request->unique_id]);
        return view('site::site.detail',compact('product'));
    }
}
