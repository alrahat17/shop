<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Brand;
use App\HTTP\Requests;
use DB;


class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('brands.index')->with('brands', $brands);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brands.create');
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
            'brand_name'=>'required',
            'brand_des'=>'required',
            'activation_status'=>'required',



        ]);

        $brand= new Brand;
        $brand->brand_name = $request->input('brand_name');
        $brand->brand_des = $request->input('brand_des');
        $brand->activation_status = $request->input('activation_status');
        $brand->save();
        return redirect('/brands');
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
         $brand=Brand::find($id);
        return view('brands.edit')->with('brand',$brand);
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
        $brand=Brand::find($id);
        $this->validate($request,[
            'brand_name'=>'required',
            'brand_des'=>'required',
            


        ]);

        $brand=Brand::find($id);
        $brand->brand_name = $request->input('brand_name');
        $brand->brand_des = $request->input('brand_des');
        
        $brand->save();
        return redirect('/brands');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand=Brand::find($id);
        $brand->delete();
        return redirect('/brands');
    }

     public function active_brand($id){
         DB::table('brands')
        ->where('id',$id)
        ->update(['activation_status'=>1]);
        return Redirect('/brands')->with('alert','brand Status Changed');
    }

    public function inactive_brand($id){
        DB::table('brands')
        ->where('id',$id)
        ->update(['activation_status'=>0]);
        return Redirect('/brands')->with('alert','brand Status Changed');
        
    }

    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    

}
