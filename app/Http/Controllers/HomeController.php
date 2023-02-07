<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\Contact;
use App\Models\Delivered;
use App\Models\usedShoes;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


use App\Models\User;

use App\Models\comment;


use App\Models\categories;

use App\Models\Product;

use App\Models\Cart;

use App\Models\Order;
class HomeController extends Controller
{
    public function index()
    {
        $product=Product::paginate(5);
        $UsedShoes=usedShoes::paginate(5);


        return view('home.userpage',compact('product','UsedShoes'));
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
            $order=Delivered::all();
            $total_revenue=0;

            foreach ($order as $order)
            {
                $total_revenue=$total_revenue + $order->price;
            }

            $total_delivered=Delivered::all()->count();
            $total_comment=comment::all()->count();

//            $total_processing=order::where('delivery_status','=','processing')->get()->count();


            return view('admin.home',compact('total_product','total_order','total_user','order','total_revenue','total_delivered','total_comment'));

        }

        else
        {
            $product=Product::paginate(5);
            $UsedShoes=usedShoes::paginate(5);
            return view('home.userpage',compact('product','UsedShoes'));
        }


    }
    public function shop()
    {
        $brand=brand::all();
        $product=product::paginate(9);
        return view('home.shop',compact('product','brand'));
    }
//    public function home_page()
//    {
//        return view('/',compact('product'));
//    }


    public function product_page($id)
    {
       $product=product::find($id);
        $brand=brand::all();
        $reviews= comment::where('product_id',$id)->get();
        return view('home.product_page',['reviews'=>$reviews],compact('product','brand'));
    }

    public function add_cart(Request $request,$id)
    {

        if (Auth::id())
        {
           $user=Auth::user();
           $products=product::find($id);

           $cart=new cart;

            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->user_id=$user->id;


            $cart->product_title=$products->title;

            if($products->discount_price!=null)
            {
                $cart->price=$products->discount_price * $request->quantity;
            }
            else
            {
                $cart->price=$products->price * $request->quantity;
            }

            $cart->image=$products->image;
            $cart->product_id=$products->id;
            $cart->size=$request->size;
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
            $cart_tt=cart::where('user_id','=',$id)->count();

            $cart=cart::where('user_id','=',$id)->get();

            return view('home.showcart',compact('cart','cart_tt'));
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

            $order->size=$data->size;

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

    public function product_search(Request $request)
    {
        $search_text=$request->search;
        $brand=brand::all();
        $product=product::where('title','LIKE',"%$search_text%")->orwhere('category','LIKE',"%$search_text%")->orwhere('brand','LIKE',"%$search_text%")->paginate(10);
        return view('home.shop',compact('product','brand'));
    }
    public function UsedShoesSearch(Request $request)
    {
        $search_Used=$request->search;
        $brand=brand::all();
        $product=usedShoes::where('title','LIKE',"%$search_Used%")->orwhere('category','LIKE',"%$search_Used%")->orwhere('brand','LIKE',"%$search_Used%")->orwhere('size','LIKE',"%$search_Used%")->paginate(10);
        return view('home.used_shoes',compact('product','brand'));
    }


    public function comment(Request $request)
    {
        //dd($request);
        $data = new comment();
        $data->user_id = Auth::id();
        $data->product_id = $request->input('product_id');
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->rate = $request->input('rate');
        $data->ip = request()->ip();
        $data->save();

//        return redirect()->route('product_page',['id'=>$request->input('product_id')])->with('info','hhhhhh');
        return redirect()->back()->with('message','Product deleted Successfully');



    }

    public function user_profile()
    {

        $id=Auth::user()->id;


        $product=usedShoes::where('user_id','=',$id)->get();



        $users=User::all();

        return view('home.user_profile',compact('users','product'));
    }
    public function update_user()
    {

        return view('home.update_user');
    }

    public function update_user_confirm(Request $request)
    {
        $validated =Validated::make($request->all(),[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'min:10','max:10'],
            'address' => ['required', 'max:50'],
        ]);

        return redirect()->back()->with('message','Product update Successfully');
    }
    public function used_shoes()
    {
        $brand=brand::all();

        $product=usedShoes::all();
        return view('home.used_shoes',compact('product','brand'));
    }

    /////////////////////////////////////////


    public function view_product_used()
    {
        $category=categories::all();
        $brand=brand::all();

        return view('home.add_product',compact('category','brand'));
    }

    public function add_product_used(Request $request)
    {

        $product=new usedShoes();
        $product->user_id = Auth::id();
        $product->user_phone=$request->user_phone;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->category=$request->category;
        $product->brand=$request->brand;
        $product->size=$request->size;


        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product->image=$imagename;

        $product->save();

        return redirect()->back()->with('message','Product Added Successfully');

    }
    public function used_product_page($id)
    {
        $product=usedShoes::find($id);
        $brand=brand::all();
        $reviews= comment::where('product_id',$id)->get();
        return view('home. used_product_page',['reviews'=>$reviews],compact('product','brand'));
    }
    public function delete_used_product($id)
    {
        $product=usedShoes::find($id);

        $product->delete();

        return redirect()->back()->with('message','Product deleted Successfully');

    }
    public function update_used_product($id)
    {
        $product=usedShoes::find($id);

        $category=categories::all();

        $brand=brand::all();


        return view('home.update_used_product',compact('product','category','brand'));
    }
    public function update_used_product_confirm(Request $request,$id)
    {
        $product=usedShoes::find($id);
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->size=$request->size;
        $product->category=$request->category;
        $product->brand=$request->brand;
        $image=$request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('product',$imagename);

            $product->image=$imagename;
        }

        $product->save();

        return redirect()->back();


    }
    public function contact()
    {

        return view('home.contact');
    }
    public function add_contact(Request $request)
    {

        $product=new Contact();
        $product->name=$request->name;
        $product->email=$request->email;
        $product->message=$request->message;


        $product->save();

        return redirect()->back()->with('message','Product Added Successfully');

    }








}
