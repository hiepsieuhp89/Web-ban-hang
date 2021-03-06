<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;
use App\Brand;
use App\ProductType;
use App\Cart;
use App\Customer;
use App\Bill;
use App\BillDetail;
use App\User;
use Hash;
use DB;
use Auth;
use Session;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getHomePage(){
        $brand = Brand::all();
        $samsung = Product::WHERE('brand','samsung')->WHERE('id_type','1')->get();
        $iphone = Product::WHERE('brand','apple')->WHERE('id_type','1')->get();
        $xiaomi = Product::WHERE('brand','xiaomi')->WHERE('id_type','1')->get();
        $top_product = Product::ORDERBY('unit_price','DESC')->get();//Lấy 20 sản phẩm có giá cao nhất giảm dần
        foreach ($samsung as $key => $value) {//5.69 into 5.690.000
            $value['sale'] = (1-($value['promotion_price']/$value['unit_price']))*100;
            $value['unit_price'] = number_format($value['unit_price'], 0, '.', '.' );
            $value['promotion_price'] = number_format($value['promotion_price'], 0, '.', '.' );
        }
        foreach ($iphone as $key => $value) {//5.69 into 5.690.000
            $value['sale'] = (1-($value['promotion_price']/$value['unit_price']))*100;
            $value['unit_price'] = number_format($value['unit_price'], 0, '.', '.' );
            $value['promotion_price'] = number_format($value['promotion_price'], 0, '.', '.' );
        }
        foreach ($xiaomi as $key => $value) {//5.69 into 5.690.000
            $value['sale'] = (1-($value['promotion_price']/$value['unit_price']))*100;
            $value['unit_price'] = number_format($value['unit_price'], 0, '.', '.' );
            $value['promotion_price'] = number_format($value['promotion_price'], 0, '.', '.' );
        }
        foreach ($top_product as $key => $value) {//5.69 into 5.690.000
            $value['sale'] = (1-($value['promotion_price']/$value['unit_price']))*100;
            $value['unit_price'] = number_format($value['unit_price'], 0, '.', '.' );
            $value['promotion_price'] = number_format($value['promotion_price'], 0, '.', '.' );
        }
        return view('page.HomePage',compact('samsung','iphone','xiaomi','top_product','brand'));
    }

    public function getProductType($type, Request $request){
        $brand = Brand::all();
        $brand_filter = 'none';
        $orderby = 'default';
        $pricerange = '0-999.999.999';
        if($request->orderby||$request->brand||$request->pricerange){
            if($request->orderby) $orderby = $request->orderby;
            if($request->brand) $brand_filter = $request->brand;
            if($request->pricerange){
                $pricerange = $request->pricerange;
            }
            $rangeformat = $request->pricerange;
                $rangeformat = str_replace('.','',$rangeformat);
                $position = strpos($rangeformat,'-');
                $min = substr ( $rangeformat ,0, $position); //lay gia thap nhat
                $max = substr ( $rangeformat ,$position+1); //lay gia cao nhat
                //$max = preg_match("/0-5/",$pricerange);
            switch($orderby){
                case 'popularity':
                    $product = Product::ORDERBY('count_bought','DESC')->WHERE('promotion_price','<=',$max)->WHERE('promotion_price','>=',$min)->paginate(20);
                    break;
                case 'rating':
                    $product = Product::ORDERBY('count_bought','DESC')->WHERE('promotion_price','<=',$max)->WHERE('promotion_price','>=',$min)->paginate(20);
                    break;
                case 'date':
                    $product = Product::ORDERBY('new','DESC')->WHERE('promotion_price','<=',$max)->WHERE('promotion_price','>=',$min)->paginate(20);
                    break;
                case 'price-desc':
                    $product = Product::ORDERBY('promotion_price','DESC')->ORDERBY('unit_price','DESC')->WHERE('promotion_price','<=',$max)->WHERE('promotion_price','>=',$min)->paginate(20);
                    break;
                case 'price':
                    $product = Product::ORDERBY('promotion_price','ASC')->ORDERBY('unit_price','ASC')->WHERE('promotion_price','<=',$max)->WHERE('promotion_price','>=',$min)->paginate(20);
                    break;
                case 'default':
                    $product = Product::WHERE('promotion_price','<=',$max)->WHERE('promotion_price','>=',$min)->paginate(20);;
                    break;
            }
                foreach($brand as $value){
                    if($brand_filter == $value->name){
                        $product = Product::WHERE('brand',$brand_filter)->paginate(20);
                    }
                }
        }
        else{
            $product = Product::paginate(20);
        }
        /*
        if($request->pricerange){
            $pricerange = $request->pricerange;
            switch($pricerange){
                case '0-5.999.990':
                    foreach($product as $key => $value){
                        if(($value['promotion_price'] >= 6000000)||($value['unit_price'] >= 6000000)){
                            unset($product[$key]);
                        }
                    }
                    break;
                case '5.000.000-15.999.999':
                    foreach($product as $key=>$value){
                        if(($value['promotion_price'] <5000000 && $value['promotion_price'] >= 16000000)||($value['unit_price'] <5000000 && $value['unit_price'] >= 16000000)){
                            unset($product[$key]);
                        }
                    }
                    break;
                case '16.000.000-50.999.999':
                    foreach($product as $key=>$value){
                        if(($value['promotion_price'] < 16000000 && $value['promotion_price'] >= 60000000)||($value['unit_price'] <16000000 && $value['unit_price'] >= 60000000)){
                            unset($product[$key]);
                        }
                    }
                    break;
            }
        }
        */
        //dd($product);
    	return view('page.ProductType',compact('brand','product','orderby','pricerange','brand_filter'));
    }

    public function getProductDetail(Request $req){
        $entities = array('-',"*");
        $replacements = array(' ',"/");
        $name = str_replace($entities, $replacements, $req->name);
        //dd($name);
        $product = Product::WHERE('name',$req->name)->ORWHERE('name',$name)->first();
        //lay ngau nhien 8 san pham moi: 
        $new_product = Product::WHERE('new','1')->ORDERBY(DB::raw('rand()'))->paginate(8);
        //lay ngau nhien 10 san pham cung loai:
        $other_product = Product::WHERE('id_brand',$product->id_brand)->ORDERBY(DB::raw('rand()'))->paginate(10);
        $sale = (1-($product->promotion_price/$product->unit_price))*100;
        $product->promotion_price = number_format($product->promotion_price, 0, '.', '.' );
        $product->unit_price = number_format($product->unit_price, 0, '.', '.' );
        $type = $req->type;
        $brand = Brand::all();
        return view('page.Product_detail',compact('product','type','brand','sale','new_product','other_product'));
    }

    public function getContact(){
    	return view('page.Contact');
    }

    public function getAbout(){
    	return view('page.About');
    }

    public function getAddToCart(Request $req, $id, $qty){
        $product = Product::find($id);
        $oldcart = Session('cart') ? Session::get('cart') : null; // toan tu 3 ngoi
        $cart = new Cart($oldcart);
        $cart -> add($product,$id,$qty);
        $req -> Session() -> put('cart',$cart);
        return redirect()->back();
        //return view('header');
    }
    public function postAddMultiToCart(Request $req, $id){
        $product = Product::find($id);
        $oldcart = Session('cart') ? Session::get('cart') : null; // toan tu 3 ngoi
        $cart = new Cart($oldcart);
        $qty = $req->quantity;
        $cart -> add($product,$id,$qty);
        $req -> Session() -> put('cart',$cart);
        return redirect()->back();
        //return view('header');
    }

    public function getRemoveItem($id){
        $oldcart = Session('cart') ? Session::get('cart') : null; // toan tu 3 ngoi
        $cart = new Cart($oldcart);
        $cart -> removeItem($id);
        Session::put('cart',$cart);
        
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();
    }
    public function getBill(){
        return view('page.DetailBill');
    }
    public function postCheckOut(Request $req){
        $cart = Session::get('cart');
        $customer = new Customer;
        $customer->name = $req->name;
        $customer->gender = $req->gender;
        $customer->email = $req->email;
        $customer->address = $req->address;
        $customer->phone_number = $req->phone_number;
        $customer->note = $req->note;
        $customer->save();

        $bill = new Bill;
        $bill->id = $customer->id;
        $bill->total = $cart->totalPrice;
        $bill->payment = $req->payment_method;
        $bill->note = $req->note;
        $bill->save();

        foreach($cart->items as $key => $value){
            $bill_detail = new BillDetail;
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_product = $key;
            $bill_detail->quantity = $value['qty'];
            $bill_detail->unit_price = $value['price']/ $value['qty'];
            $bill_detail->save();
        }
        Session::forget('cart');
           // return redirect()->route('HomePage')
        return redirect()->route('HomePage')->with('thong bao','Đặt hàng thành công!');
    }
    public function getLoginPage(){
        return view('page.LoginPage');
    }
    /*
    public function postLogin(Request $req){
        $this->validate($req,
        [
            'email'=>'required|email|',
            'password'=>'required|min:6|max:30', 

        ],
        [
            'email.required'=>'Nhập email đi cháu', 
            'email.email'=>'Thứ m nhập đéo phải email', 
            'password.required'=>'Không có mật khẩu sau đăng nhập đây',
            'password.min'=>'Mật khẩu phải ít nhất 6 kí tự anh ơi', 
            'password.max'=>'Mật khẩu gì mà dài thế', 
        ]);
        $credentials = array('email' => email ,'p' );
        
    }
    */
    public function postLogin(Request $request)
    {
        $data = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            return redirect()->back()->with('dang nhap', 'Đăng nhập thành công!');
        } else {
            return redirect()->back()->with('dang nhap', 'Đăng nhập không thành công!');
        }
    }
    public function getSignup(){
        return view('page.Signup');
    }
    public function postSignup(Request $req){
        $validatedate = $req->validate(
            [
                'email'=>'bail|required|email|unique:users,email',
                'password'=>'bail|required|min:6|max:30', 
                'username'=>'bail|required',
                'password_confirmation'=>'bail|required|same:password'
            ],
            [
                'username.required'=>'Không có tên à em',
                'email.required'=>'Nhập email đi cháu', 
                'email.email'=>'Thứ m nhập đéo phải email', 
                'email.unique'=>'Dùng lại email ko đc nha cháu', 
                'password.required'=>'Không có mật khẩu sau đăng nhập đây',
                'password_confirmation.required'=>'Nhập lại mật khẩu cho đỡ nhầm nhé', 
                'password_confirmation.same'=>'Mật khẩu ko trùng nhé cháu', 
                'password.min'=>'Mật khẩu phải ít nhất 6 kí tự anh ơi', 
                'password.max'=>'Mật khẩu gì mà dài thế', 
            ]);
        $user = new User();
        $user->name = $req->username;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->phone = $req->phone;
        $user->save();
        /*if($validatedate->$errors->any()){
            return redirect()->back()->with('dang ky', 'Đăng ký thành công');
        }
        else{
            return redirect()->route('LoginPage')->with('dang ky', 'Đăng ký thành công');
        }
        */
        return redirect()->back()->with('dang ky', 'Đăng ký thành công');

    }
    public function Seed() {
      $data2 = Product::all();
      $data = $data2;
        $utf8 = array(

            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',

            'd'=>'đ|Đ',

            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',

            'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',

            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',

            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',

            'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',

        );
        foreach($data as $item){
            echo "[<br>
                'name'=>'".$item->name."',<br>";
            foreach($utf8 as $ascii=>$uni) $item->name = preg_replace("/($uni)/i",$ascii,$item->name);
            echo "
                'name2'=>'".strtolower($item->name)."',<br>";
            echo "
                'brand'=>'".$item->brand."',<br>";
            echo "
                'id_brand'=>'".$item->id_brand."',<br>";
            echo "
                'Screen'=>'".$item->Screen."',<br>";
            echo "
                'CPU'=>'".$item->CPU."',<br>";
            echo "
                'RAM'=>'".$item->RAM."',<br>";
            echo "
                'Camera'=>'".$item->Camera."',<br>";
            echo "
                'Selfie'=>'".$item->Selfie."',<br>";
            echo "
                'PIN'=>'".$item->PIN."',<br>";
            echo "
                'description'=>'".$item->description."',<br>";
            echo "
                'id_type'=>'".$item->id_type."',<br>";
            echo "
                'unit_price'=>'".$item->unit_price."',<br>";
            echo "
                'promotion_price'=>'".$item->promotion_price."',<br>";
            echo "
                'image'=>'".$item->image."',<br>";
            echo "
                'count_bought'=>'".$item->count_bought."',<br>";
            echo "
                'unit'=>'".$item->unit."',<br>";
            echo "
                'new'=>'".$item->new."'<br>";
            echo "],<br>";
        }
    }
    public function getSearch(Request $req){
        $key_name = strtolower($req->key);
        $utf8 = array(

            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',

            'd'=>'đ|Đ',

            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',

            'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',

            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',

            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',

            'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );
            foreach($utf8 as $ascii=>$uni) $key_name = preg_replace("/($uni)/i",$ascii,$key_name);
            
        $namep = $req->key;
        $slide = Slide::all();
        $product = Product::WHERE('name2','LIKE','%' .$key_name. '%')->paginate(16);
        return view('page.Search',compact('slide','product','namep'));
    }
    public function check(Request $request)
    {
        $data = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            //true
        } else {
            //false
        }
    }
    public function make_promoprice(){
        $product = Product::all();
        foreach ($product as $key => $value) {
            if($value['id_brand'] == 1){
                $value['promotion_price'] = $value['unit_price'] * 0.8;
                $product = Product::where('id',$value['id'])->update(['promotion_price'=>$value['promotion_price']]);
            }
            if($value['id_brand'] == 2){
                $value['promotion_price'] = $value['unit_price'] * 0.5;
                $product = Product::where('id',$value['id'])->update(['promotion_price'=>$value['promotion_price']]);
            }
            if($value['id_brand'] == 3){
                $value['promotion_price'] = $value['unit_price'] * 0.4;
                $product = Product::where('id',$value['id'])->update(['promotion_price'=>$value['promotion_price']]);
            }
        }
    }
}
