@extends('layouts.admin-layout')
@section('admin_content')

<div class="col-lg-6">
  <div class="card">
    <div class="card-header">
      <strong>Basic Form</strong> Elements
    </div>
    <div class="card-body card-block">
      <form action="/categories" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="row form-group">
          {{ csrf_field() }}
        </div>
        <div class="row form-group">
          <div class="col col-md-3"><label for="category_name" class=" form-control-label"> Category Name</label></div>
          <div class="col-12 col-md-9"><input type="text" id="category_name" name="category_name" placeholder="Enter Category Name" class="form-control">
          </div>
        </div>
        <div class="row form-group">
          <div class="col col-md-3"><label for="category_des" class=" form-control-label"> Category Description</label></div>
          <div class="col-12 col-md-9"><input type="text" id="category_des" name="category_des" placeholder="Enter Category Description" class="form-control"></div>
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

