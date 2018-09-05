@extends('layouts.admin-layout')
@section('admin_content')

<div class="col-lg-6">
  <div class="card">
    <div class="card-header">
      <strong>Basic Form</strong> Elements
    </div>
    <div class="card-body card-block">
      <form action="{{url('/categories/'.$category->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="row form-group">
          {{ csrf_field() }}
          {{method_field('PUT')}}
        </div>
        <div class="row form-group">
          <div class="col col-md-3"><label for="category_name" class=" form-control-label"> Category Name</label></div>
          <div class="col-12 col-md-9"><input type="text" id="category_name" name="category_name" value="{{$category->category_name}}" class="form-control">
           
          </div>
        </div>
        <div class="row form-group">
          <div class="col col-md-3"><label for="category_des" class=" form-control-label"> Category Description</label></div>
          <div class="col-12 col-md-9"><textarea name="category_des" id="category_des" rows="9" value="{{$category->category_des}}"  class="form-control"></textarea></div>
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

