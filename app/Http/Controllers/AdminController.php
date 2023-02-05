<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Delivered;
use Illuminate\Http\Request;

use App\Models\categories;

use App\Models\Product;

use App\Models\Order;

use App\Models\brand;


use App\Models\User;

use App\Models\comment;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function view_category()
    {
        $data=categories::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $data=new categories;

        $data->category_name=$request->Category;

        $data->save();

        return redirect()->back()->with('message','category Added Successfully');

    }

    public function delete_category($id)
    {
        $data=categories::find($id);
        $data->delete();

        return redirect()->back()->with('massage','Category Deleted Successfully');


    }

    public function view_brand()
    {
        $data=brand::all();
        return view('admin.brand', compact('data'));
    }

    public function add_brand(Request $request)
    {
        $data=new brand;

        $data->brand_name=$request->brand;

        $data->save();

        return redirect()->back()->with('message','Brand Added Successfully');

    }

    public function delete_brand($id)
    {
        $data=brand::find($id);
        $data->delete();

        return redirect()->back()->with('massage','Brand Deleted Successfully');


    }




    public function view_product()
    {
        $category=categories::all();
        $brand=brand::all();

        return view('admin.product',compact('category','brand'));
    }

    public function add_product(Request $request)
    {

        $product=new product;
        $product->title=$request->title;

        $product->description=$request->description;

        $product->price=$request->price;

        $product->quantity=$request->quantity;

        $product->discount_price=$request->dis_price;

        $product->category=$request->category;


        $product->brand=$request->brand;


        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('product',$imagename);

        $product->image=$imagename;

        $product->save();

        return redirect()->back()->with('message','Product Added Successfully');



    }

    public function show_product()
    {
        $product=product::all();
        return view('admin.show_product',compact('product'));
    }

    public function delete_product($id)
    {
        $product=product::find($id);

        $product->delete();

        return redirect()->back()->with('message','Product deleted Successfully');

    }

    public function update_product($id)
    {
        $product=product::find($id);

        $category=categories::all();

        $brand=brand::all();


        return view('admin.update_product',compact('product','category','brand'));
    }

    public function update_product_confirm(Request $request,$id)
    {
        $product=product::find($id);

        $product->title=$request->title;

        $product->description=$request->description;

        $product->price=$request->price;

        $product->quantity=$request->quantity;

        $product->discount_price=$request->dis_price;

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
    public function order()
    {
        $order=order::all();

        return view('admin.order',compact('order'));

    }

    public function delivered_order($id)
    {

//        $user=Auth::user();
//        $id=$user->id;

//        $order=order::find();
        $data=Order::where('id','=',$id)->get();

        foreach ($data as $data)
        {
            $delivered=new Delivered();

            $delivered->name=$data->name;

            $delivered->email=$data->email;

            $delivered->phone=$data->phone;

            $delivered->address=$data->address;

            $delivered->user_id=$data->user_id;

            $delivered->product_id=$data->product_id;

            $delivered->product_title=$data->product_title;

            $delivered->quantity=$data->quantity;

            $delivered->price=$data->price;

            $delivered->image=$data->image;

            $delivered->payment_status='cash on delivery';

            $delivered->delivery_status='processing';

            $delivered->save();

            $order_id=$data->id;
            $order=Order::find($order_id);
            $order->delete();


        }

        return redirect()->back()->with('message','We have Received your Order. we will connect with you soon...');


    }


    public function delivered()
    {
        $delivered=Delivered::all();

        return view('admin.delivered',compact('delivered'));
    }

    public function users()
    {
        $users=User::all();
        return view('admin.user',compact('users'));
    }

    public function update_user($id)
    {
        $users=User::find($id);



        return view('admin.update_user',compact('users'));
    }



    public function update_user_confirm(Request $request, $id)
    {
        $users=User::find($id);

        $users->name=$request->name;

        $users->email=$request->email;

        $users->phone=$request->phone;

        $users->address=$request->address;

        $users->usertype=$request->usertype;


        $users->save();

        return redirect()->back()->with('message','Product update Successfully');


    }
    public function delete_users($id)
    {
        $users=User::find($id);

        $users->delete();

        return redirect()->back()->with('message','Product deleted Successfully');

    }
    public function comment()
    {
        $comment=comment::all();

        return view('admin.comment',compact('comment'));
    }

    public function delete_comment($id)
    {
        $comment=comment::find($id);

        $comment->delete();

        return redirect()->back()->with('message','o');

    }
    public function show_comment($id)
    {
        $data= comment::find($id);
        return view('admin.show_comment',[
            'data' => $data
        ]);

    }
    public function profile()
    {
        return view('admin.profile');
    }





}
