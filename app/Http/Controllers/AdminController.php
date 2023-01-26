<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\categories;

use App\Models\Product;

use App\Models\Order;

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

    public function view_product()
    {
        $category=categories::all();
        return view('admin.product',compact('category'));
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

        return view('admin.update_product',compact('product','category'));
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

    public function delivered($id)
    {
        $order=order::find($id);

        $order->delivery_status='delivered';
        $order->save();
        return redirect()->back();
    }

}
