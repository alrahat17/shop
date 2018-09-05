<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;
use App\Brand;
use App\Product;
use App\HTTP\Requests;
use DB;
//use Http/Request;
//use Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        return view('products.index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat_select = Category::all();
        $item_select = Item::all();
        $brand_select = Brand::all();

        return view('products.create',compact("cat_select","item_select","brand_select"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return redirect('/products');
        
        
        $this->validate($request,[

            'category_id'=>'required',
            'item_id'=>'required',
            'brand_id'=>'required',
            'product_name'=>'required',
            'product_des'=>'required',
            'product_price'=>'required',
            'product_img'=>'required|image|mimes:jpeg,jpg,png|max:2000',
            'product_img_2'=>'required|image|mimes:jpeg,jpg,png|max:2000',
            'product_img_3'=>'required|image|mimes:jpeg,jpg,png|max:2000',
            
            'activation_status'=>'required',


        ]);

        
        /*
        if($request->hasFile('product_img')){

        $file_name=$request->file('product_img')->getClientOriginalName();
        //$name=str_random(10).'.'.$product_img->getClientOriginalExtension();
        $name=pathinfo($file_name,PATHINFO_FILENAME);
        $ext=$request->file('product_img')->getClientOriginalExtension();
        //$upload_path='image/';
        $image_name=$name.'_'.time().'.'.$ext;
        //$product_img->move('upload_path',$image_name);
        $path= $request->file('product_img')->storeAs('public/image',$image_name);

        }

        else{
            $image_name='noimage.jpg';
        }
        */

        $product_img=$request->file('product_img');
        $img_name= str_random(10).'.'.$product_img->getClientOriginalExtension();
        $upload_path='image/';
        $image_fullname=$upload_path.$img_name;
        $product_img->move($upload_path,$image_fullname);

        $product_img_2=$request->file('product_img_2');
        $img_name_2= str_random(8).'.'.$product_img_2->getClientOriginalExtension();
        $upload_path='image/';
        $image_fullname_2=$upload_path.$img_name_2;
        $product_img_2->move($upload_path,$image_fullname_2);

        $product_img_3=$request->file('product_img_3');
        $img_name_3= str_random(5).'.'.$product_img_3->getClientOriginalExtension();
        $upload_path='image/';
        $image_fullname_3=$upload_path.$img_name_3;
        $product_img_3->move($upload_path,$image_fullname_3);

        

        $product = new Product;
        $product->category_id=$request->input('category_id');

        $product->item_id=$request->input('item_id');
        $product->brand_id=$request->input('brand_id');
        $product->product_name=$request->input('product_name');

        $product->product_des=$request->input('product_des');
        $product->product_price=$request->input('product_price');
        $product->product_img=$image_fullname;
        $product->product_img_2=$image_fullname_2;
        $product->product_img_3=$image_fullname_3;
        $product->product_size=$request->input('product_size');
        $product->product_size2=$request->input('product_size2');
        $product->product_size3=$request->input('product_size3');
        $product->product_size4=$request->input('product_size4');
        $product->activation_status=$request->input('activation_status');
        $product->save();

        
        return redirect('/products');
    


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($product_id)
    {
        $cat_select = Category::all();
        $item_select = Item::all();
        $brand_select = Brand::all();
        $product=Product::find($product_id);
        return view('products.edit',compact("cat_select","item_select","brand_select"))->with('product',$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product_id)
    {
        $product= Product::find($product_id);
        // $this->validate($request,[

            
        //     'product_name'=>'required',
        //     'product_des'=>'required',
        //     'product_price'=>'required',
        //     'product_img'=>'required|image|mimes:jpeg,jpg,png|max:2000',
        //     //'activation_status'=>'required',


        // ]);



            



            
            
            $product->product_name=$request->input('product_name');

            $product->product_des=$request->input('product_des');
            $product->product_price=$request->input('product_price');
            
            $product->save();

        

            return redirect('/products');


        


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id)
    {
       $product=Product::find($product_id);
        $product->delete();
        return redirect('/products');
    }

    public function active_product($product_id){
         DB::table('products')
        ->where('product_id',$product_id)
        ->update(['activation_status'=>1]);
        return Redirect('/products')->with('alert','Item Status Changed');
    }

    public function inactive_product($product_id){
        DB::table('products')
        ->where('product_id',$product_id)
        ->update(['activation_status'=>0]);
        return Redirect('/products')->with('alert','Item Status Changed');
        
    }


    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
}
