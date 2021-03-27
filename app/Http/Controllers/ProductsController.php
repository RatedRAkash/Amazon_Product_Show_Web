<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\User;
use App\Models\Product;

class ProductsController extends Controller
{

    public function index()
    {
        $products=Product::all();
        //return response()->json($product);
        return view('products.all_product',compact('products'));
    }


    public function create()
    {
        return view('products.create_product');
    }


    public function store(Request $request)
    {
        $data=new Product;
        $data->product_name=$request->product_name;
        $data->user_id=auth()->user()->id;
        $data->product_price=$request->product_price;
        $data->product_link=$request->product_link;

        $image =$request->file('image');

        if($image)
        {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='images/product_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data->image=$image_url;
        }

        $data->save();


        //return response()->json($data);

        return Redirect('/products');

    }


    public function show($id)
    {
        $product=Product::findorfail($id);
        return view('products.view_product',compact('product'));
    }


    public function edit($id)
    {
        $product=Product::findorfail($id);
        return view('products.edit_product',compact('product'));
    }


    public function update(Request $request, $id)
    {
        $data=Product::findorfail($id);
        $data->user_id=auth()->user()->id;
        $data->product_name=$request->product_name;
        $data->product_price=$request->product_price;
        $data->product_link=$request->product_link;

        $image =$request->image;

        if($image)
        {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='images/product_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data->image=$image_url;
        }

        $data->save();

        //return response()->json($data);

        if($data){
            //return Redirect()->back();
            return Redirect('/products');
        }
    }


    public function destroy($id)
    {
        $product=Product::findorfail($id);
        $product->delete();
        return Redirect('/products');
    }

    public function search()
    {
        $search_text=$_GET['query'];
        $products=Product::where('product_name','LIKE', '%'.$search_text.'%')->get();
        return view('products.all_product',compact('products'));
    }

    public function sort()
    {
        $search_text=$_GET['sort'];
        if($search_text=="product_lowest")
        {
            $products = Product::orderBy('product_price', 'ASC')->get();
        }

        else if($search_text=="product_highest")
        {
            $products = Product::orderBy('product_price', 'DESC')->get();
        }

        else if($search_text=="product_a_to_z")
        {
            $products = Product::orderBy('product_name', 'ASC')->get();
        }

        else if($search_text=="product_z_to_a")
        {
            $products = Product::orderBy('product_price', 'DESC')->get();
        }

        else if($search_text=="default")
        {
            $products = Product::orderBy('id', 'ASC')->get();
        }

        return view('products.all_product',compact('products'));
    }


}
