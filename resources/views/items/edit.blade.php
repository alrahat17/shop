@extends('layouts.admin-layout')
@section('admin_content')

<div class="col-lg-6">
  <div class="card">
    <div class="card-header">
      <strong>Basic Form</strong> Elements
    </div>
    <div class="card-body card-block">
      <form action="{{url('/items/'.$item->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="row form-group">
          {{ csrf_field() }}
          {{method_field('PUT')}}
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
          <div class="col col-md-3"><label for="item_name" class=" form-control-label"> item Name</label></div>
          <div class="col-12 col-md-9"><input type="text" id="item_name" name="item_name" value="{{$item->item_name}}" class="form-control">
           
          </div>
        </div>
        <div class="row form-group">
          <div class="col col-md-3"><label for="item_des" class=" form-control-label"> item Description</label></div>
          <div class="col-12 col-md-9"><textarea name="item_des" id="item_des" rows="9"   class="form-control">{{$item->item_des}}</textarea></div>
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

