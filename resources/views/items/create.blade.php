@extends('layouts.admin-layout')
@section('admin_content')

<div class="col-lg-6">
  <div class="card">
    <div class="card-header">
      <strong>Basic Form</strong> Elements
    </div>
    <div class="card-body card-block">
      <form action="/items" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="row form-group">
          {{ csrf_field() }}
        </div>
        
        <div class="row form-group">
          <div class="col col-md-3"><label for="select" class=" form-control-label">Category</label></div>
          <div class="col-12 col-md-9">
            <select name="category_id" id="category_id" class="form-control">
              
              @foreach ($cat_select as $category)

              <option value="{{$category->id}}">{{$category->category_name}}</option>
              
              
              @endforeach
              
              
              
            </select>
          </div>
        </div>

        <div class="row form-group">
          <div class="col col-md-3"><label for="item_name" class=" form-control-label"> Item Name</label></div>
          <div class="col-12 col-md-9"><input type="text" id="item_name" name="item_name" placeholder="Enter item Name" class="form-control">
          </div>
        </div>
        <div class="row form-group">
          <div class="col col-md-3"><label for="item_des" class=" form-control-label"> Item Description</label></div>
          <div class="col-12 col-md-9"><input type="text" id="item_des" name="item_des" placeholder="Enter item Description" class="form-control"></div>
        </div>

        
        

        
        
        

        
        
        
        
        
        <div class="row form-group">
          <div class="col col-md-3"><label class=" form-control-label">  Status</label></div>
          <div class="col col-md-9">
            <div class="form-check">
              <div class="radio">
                <label for="activation_status" class="form-check-label ">
                  <input type="radio" id="activation_status" name="activation_status" value="1" class="form-check-input"> Active
                </label>
              </div>
              <div class="radio">
                <label for="activation_status" class="form-check-label ">
                  <input type="radio" id="activation_status" name="activation_status" value="0" class="form-check-input"> Inactive
                </label>
              </div>
              
            </div>
          </div>
        </div>



        
        
        <div class="card-footer">
          <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
          </button>
          <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
          </button>
        </div>
      </div>

      @endsection

