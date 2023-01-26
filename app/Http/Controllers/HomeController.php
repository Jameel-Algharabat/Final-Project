<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\categories;

use App\Models\Product;

use App\Models\Cart;

use App\Models\Order;
class HomeController extends Controller
{
    public function index()
    {
        return view('home.userpage');
    }






    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
    //  * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }

    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            $total_product=product::all()->count();
            $total_order=order::all()->count();
            $total_user=user::all()->count();
            $order=order::all();
            $total_revenue=0;

            foreach ($order as $order)
            {
                $total_revenue=$total_revenue + $order->price;
            }

            $total_delivered=order::where('delivery_status','=','delivered')->get()->count();

            $total_processing=order::where('delivery_status','=','processing')->get()->count();


            return view('admin.home',compact('total_product','total_order','total_user','order','total_revenue','total_delivered','total_processing'));

        }

        else
        {
            return view('home.userpage');
        }


    }
    public function shop()
    {
        $product=product::paginate(9);
        return view('home.shop',compact('product'));
    }

    public function product_page($id)
    {
       $product=product::find($id);
        return view('home.product_page',compact('product'));
    }

    public function add_cart(Request $request,$id)
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


            $cart->product_title=$product->title;

            if($product->discount_price!=null)
            {
                $cart->price=$product->discount_price * $request->quantity;
            }
            else
            {
                $cart->price=$product->price * $request->quantity;
            }

            $cart->image=$product->image;
            $cart->product_id=$product->id;

            $cart->quantity=$request->quantity;

            $cart->save();

            return redirect()->back();


        }
        else
        {
        return redirect('login');
        }

    }

    public function show_cart()
    {
        if (Auth::id())
        {
            $id=Auth::user()->id;

            $cart=cart::where('user_id','=',$id)->get();

            return view('home.showcart',compact('cart'));
        }
        else
        {
            return redirect('login');
        }


    }
    public function remove_cart($id)
    {
        $cart=cart::find($id);
        $cart->delete();
        return redirect()->back();

    }
    public function cash_order()
    {
        $user=Auth::user();
        $userid=$user->id;

        $data=cart::where('user_id','=',$userid)->get();

        foreach ($data as $data)
        {
            $order=new order;

            $order->name=$data->name;

            $order->email=$data->email;

            $order->phone=$data->phone;

            $order->address=$data->address;

            $order->user_id=$data->user_id;

            $order->product_id=$data->product_id;

            $order->product_title=$data->product_title;

            $order->quantity=$data->quantity;

            $order->price=$data->price;

            $order->image=$data->image;

            $order->payment_status='cash on delivery';

            $order->delivery_status='processing';

            $order->save();

            $cart_id=$data->id;
            $cart=cart::find($cart_id);
            $cart->delete();


        }
        return redirect()->back()->with('message','We have Received your Order. we will connect with you soon...');


    }

    public function stripe($totalprice)
    {

        return view('home.stripe');
    }


}