<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HTTP\Requests;
use DB;
use App\Item;
use App\Category;
use App\Brand;
use App\Product;
use App\Order;
use App\Order_items;
use App\User;
use Session;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function add_to_cart(Request $request){
    
    $qty= $request->qty;
    $product_id=$request->product_id;
    $product_size=$request->select_product_size;
    $product_details=DB::table('products')
                    ->join('brands','products.brand_id','=','brands.id')
                    ->where('product_id',$product_id)
                    ->first();

    $data['qty']=$qty;
    $data['id']=$product_details->product_id;
    $data['name']=$product_details->product_name;
    $data['options']['brand']=$product_details->brand_name;
    $data['price']=$product_details->product_price;
    $data['options']['size']=$product_details->product_size;
    $data['options']['image']=$product_details->product_img;

    Cart::add($data);
    return Redirect::to('/show_cart');
    

    

   }
   public function show_cart(){

    
    $data=DB::table('products')
                ->join('categories','products.category_id','=','categories.id')
                ->join('brands','products.brand_id','=','brands.id')
                ->join('items','products.item_id','=','items.id')
                ->first();

    
        

    return view('add_to_cart')->with('data', $data);

   }

   public function delete_cart_item($rowId){

    Cart::remove($rowId);
    return Redirect::to('/show_cart');
   }

   public function inc_qty(Request $request){
    $qty=$request->qty;
    $rowId=$request->rowId;
   
    $qty=$qty+1;

    Cart::update($rowId,$qty);

    return Redirect::to('/show_cart');

   }

   public function dec_qty(Request $request){
    $qty=$request->qty;
    $rowId=$request->rowId;
   
    $qty=$qty-1;

    Cart::update($rowId,$qty);

    return Redirect::to('/show_cart');

   }
   
   public function show_checkout(){
    if(Auth::check()){
        return view('/checkout');

    }
    else{
        return view('auth.login');


    }

    

    }

    public function save_order(Request $request){
        $user_id= Auth::id();
        $order = new Order();
        
        $order->user_id=$user_id;
        $order->total_amount=Cart::total();
        $order->shipping_address=$request->input('shipping_address');
        $order->save();

       

        $contents=Cart::content();
        foreach ($contents as $content ){
        

        $order_item = new Order_items();
        $order_item->order_id = $order->id;
        $order_item->product_id = $content->id;
        $order_item->product_name = $content->name;
        $order_item->qty = $content->qty;
        $order_item->product_price = $content->total;
        $order_item->product_size = $content->options->size;
        $order_item->save();
        }
        
        
        return redirect('/');





    }

    
    
}
