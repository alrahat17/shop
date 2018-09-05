<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;
use App\Category;
use App\HTTP\Requests;
use DB;
use Session;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return view('items.index')->with('items', $items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat_select = Category::all(); // to view categories in dropdown, not necessary to be same as table name

        return view('items.create',compact("cat_select"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'category_id'=>'required',
            'item_name'=>'required',
            'item_des'=>'required',
            'activation_status'=>'required',



        ]);

        $item = new Item;
        $item->category_id = $request->input('category_id');
        $item->item_name = $request->input('item_name');
        $item->item_des = $request->input('item_des');
        $item->activation_status = $request->input('activation_status');
        $item->save();

        //echo "hello";
        return redirect('/items');
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
    public function edit($id)
    {
        $cat_select = Category::all();
        $item=Item::find($id);
        return view('items.edit',compact("cat_select"))->with('item',$item);
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
        $item=Item::find($id);
        $this->validate($request,[
            'category_id'=>'required',
            'item_name'=>'required',
            'item_des'=>'required',
            //'activation_status'=>'required',



        ]);

        $item=Item::find($id);
        $item->category_id = $request->input('category_id');
        $item->item_name = $request->input('item_name');
        $item->item_des = $request->input('item_des');
        //$item->activation_status = $request->input('activation_status');
        $item->save();
        return redirect('/items');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Item::find($id);
        $item->delete();
        return redirect('/items');
    }

    public function active_item($id){
         DB::table('items')
        ->where('id',$id)
        ->update(['activation_status'=>1]);
        return Redirect('/items')->with('alert','Item Status Changed');
    }

    public function inactive_item($id){
        DB::table('items')
        ->where('id',$id)
        ->update(['activation_status'=>0]);
        return Redirect('/items')->with('alert','Item Status Changed');
        
    }

    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    

}
