<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;
use App\Brand;
use App\Product;
use App\HTTP\Requests;
use Illuminate\Support\Facades\DB;

//use DB;

class CustomerProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customerproducts=Product::orderBy('product_id','desc')->where('activation_status',1)->paginate(8);
        $items=Item::orderBy('id','desc')->where('activation_status',1)->get();
        
        
        return view('customerproducts.index')->with('customerproducts',$customerproducts)->with('items',$items);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($product_id)
    {
        $product= Product::find($product_id);
        $item_id=$product->item_id;
        $category_id=$product->category_id;
        $product_id=$product->product_id;
        $rel_pros=Product::orderBy('product_id','desc')
                ->where('activation_status',1)
                ->where('category_id',$category_id)
                ->where('item_id',$item_id)
                ->where('product_id','!=',$product_id)
                ->get(); 
        

        
        return view('customerproducts.show')->withProduct($product)->with('rel_pros',$rel_pros);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function customer_login(){

        return view('customer_login');
    }

    public function show_product_by_item($id){
       
        
        $customerproducts=Product::orderBy('product_id','desc')
                            ->where('item_id',$id)
                            ->paginate(9);
                            //->get();

        $brands=Brand::orderBy('id','desc')->get();
        $items=Item::orderBy('id','desc')->get();
        
        
        
        return view('product_by_item')->with('customerproducts',$customerproducts)->with('brands',$brands)->with('items',$items);
        
    }

    public function show_product_by_brand($id){
        $customerproducts=Product::orderBy('product_id','desc')
                            ->where('brand_id',$id)
                            ->paginate(9);
                            //->get();

        $brands=Brand::orderBy('id','desc')->get();
        $items=Item::orderBy('id','desc')->get();
        
        
        
        return view('product_by_item')->with('customerproducts',$customerproducts)->with('brands',$brands)->with('items',$items);

    }

    public function show_contact(){

        return view('contact');
    }
    public function show_blog(){

        return view('blog');
    }

    public function show_blog_detail(){

        return view('blog_detail');
    }
    public function show_about(){

        return view('about');
    }
    public function show_products(){

        $customerproducts=Product::orderBy('product_id','desc')->where('activation_status',1)->paginate(9);
        $items=Item::orderBy('id','desc')->where('activation_status',1)->get();
        $brands=Brand::orderBy('id','desc')->where('activation_status',1)->get();
        $categories=Category::orderBy('id','desc')->where('activation_status',1)->get();
        
        
        return view('products')->with('customerproducts',$customerproducts)->with('items',$items)->with('brands',$brands)->with('categories',$categories);


    }
    





    
}
