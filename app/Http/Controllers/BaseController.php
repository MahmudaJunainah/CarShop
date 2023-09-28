<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Profile;
use App\Models\Order;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;

class BaseController extends Controller
{
    public function home(){
        $products = Product::get();
        $new_products = Product::limit(6)->latest()->get();
        return view('front.home',compact('products','new_products'));
    }

    public function login(){
        return view('front.login');
    }
    public function logincheck(Request $request){
        $data = array(
            'email' => $request -> email,
            'password' => $request -> password,
            

        );
        if(Auth::attempt($data)){
            if(Auth::user()->role == 'admin'){
                return redirect()->route('admin.dashboard');
            }
            else{
                return redirect()->route('home');}

        }
        
        else{
            return back()->withErrors(['message'=>'invalid email or password']);
        }
    }

    public function product(){
        $products = Product::get();
        
        
        /*$new_products = Product::limit(8)->latest()->get();*/
        return view('front.product',compact('products'));
    }

    public function userdashboard(){
        return view ('user.dashboard');
    }

    public function register(){
        return view('front.register');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

    public function user_register(Request $request){
        $data = array(
            'name' => $request -> name,
            'email' => $request -> email,
            'password' => Hash::make($request->password),
            'role' => 'user'

        );
        $user = User::create($data);
        return redirect()->route('login');
    }

    public function show_cart(){
        if(Auth::id())
        {
            $id=Auth::user()->id;
            $cart=cart::where('user_id','=',$id)->get();
            return view('front.showcart',compact('cart'));
        }
        else
        {
            return redirect('login');
        }
        
    }

    public function add_cart(Request $request, $id)
    {
        if (Auth::id())
        {
            $user=Auth::user();
            
            $product=product::find($id);
            
            $cart=new cart;
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->user_id=$user->id;
            $cart->category_id=$product->id;
            $cart->category_name=$product->name;
            $cart->price=$product->price;
            $cart->image=$product->image;
            $cart->quantity=$request->quantity;
            $cart->save();
            return redirect()->back();
        }
        else
        {
            return redirect('login');
        }
    }
    public function remove_cart($id){
        $cart=cart::find($id);
        $cart->delete();
        return redirect()->back(); 
     }
     public function cash_order(){
        $user=Auth::user();
        $userid=$user->id;
        $data=cart::where('user_id','=',$userid)->get();

        foreach($data as $data){
            $order = new order;
            $order->name=$data->name;
            $order->email=$data->email;
            $order->phone=$data->phone;

            $order->user_id=$data->user_id;
            $order->product_name=$data->category_name;
            $order->price=$data->price;
            $order->quantity=$data->quantity;
            $order->image=$data->image;
            $order->category_id=$data->category_id;
            $order->delivery_status='cash on delivery';
            $order->save();

            $cart_id=$data->id;
            $cart=cart::find($cart_id);
            $cart->delete();
        }

        return redirect()->back()->with('message','We have received your order');

    }
    public function assemble(){
        return view('front.assemble');
    }

    public function offer(){
        $offers = Offer::get();
        
        
        
        return view('front.offer',compact('offers'));
    }
    public function offer_add_cart(Request $request, $id)
    {
        if (Auth::id())
        {
            $user=Auth::user();
            
            $offer=offer::find($id);
            
            $cart=new cart;
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->user_id=$user->id;
            $cart->id=$offer->id;
            $cart->name=$offer->name;
            $cart->price=$offer->price;
            $cart->image=$offer->image;
            $cart->quantity=$request->quantity;
            $cart->category_name=$offer->name;
            $cart->category_id=$offer->id;
            $cart->save();
            return redirect()->back();
        }
        else
        {
            return redirect('login');
        }
    }

}
