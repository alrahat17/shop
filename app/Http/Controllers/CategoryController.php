<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\HTTP\Requests;
use DB;
use Illuminate\Support\Facades\Auth;
use Session;
session_start();
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    


     */
    

    public function index()
    {
        
       
        $categories = Category::all();
        return view('categories.index')->with('categories', $categories);

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    
        return view('categories.create');
       
        
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
            'category_name'=>'required',
            'category_des'=>'required',
            'activation_status'=>'required',



        ]);

        $category= new Category;
        $category->category_name = $request->input('category_name');
        $category->category_des = $request->input('category_des');
        $category->activation_status = $request->input('activation_status');
        $category->save();
        return redirect('/categories');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$category=Category::find($id);
        //return view('categories.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $category=Category::find($id);
        return view('categories.edit')->with('category',$category);


        

        
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
        $category=Category::find($id);
        $this->validate($request,[
            'category_name'=>'required',
            'category_des'=>'required',
            


        ]);

        $category=Category::find($id);
        $category->category_name = $request->input('category_name');
        $category->category_des = $request->input('category_des');
        
        $category->save();
        return redirect('/categories');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::find($id);
        $category->delete();
        return redirect('/categories');
        
    }

    public function active_category($id){
         DB::table('categories')
        ->where('id',$id)
        ->update(['activation_status'=>1]);
        return Redirect('/categories')->with('alert','Category Status Changed');
    }

    public function inactive_category($id){
        DB::table('categories')
        ->where('id',$id)
        ->update(['activation_status'=>0]);
        return Redirect('/categories')->with('alert','Category Status Changed');
        
    }
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    


    
}
