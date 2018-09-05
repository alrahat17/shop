@extends('layouts.admin-layout')
@section('admin_content')

  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <strong>Basic Form</strong> Elements
                      </div>
                      <div class="card-body card-block">
                        <form action="/products" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                            {{ csrf_field() }}
                          </div>
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Category</label></div>
                            <div class="col-12 col-md-9">
                             <!--changed for test--> <select name="category_id" id="category_id" class="form-control">
                              
                                  @foreach ($cat_select as $category)

                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                
                                    
                                  @endforeach
                              
                                
                                
                              </select>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label"> Item</label></div>
                            <div class="col-12 col-md-9">
                              <select name="item_id" id="item_id" class="form-control">
                              
                                  @foreach ($item_select as $item)

                                <option value="{{$item->id}}">{{$item->item_name}}</option>
                                
                                    
                                  @endforeach
                              
                                
                                
                              </select>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label"> Brand</label></div>
                            <div class="col-12 col-md-9">
                              <select name="brand_id" id="brand_id" class="form-control">
                              
                                  @foreach ($brand_select as $brand)

                                <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                
                                    
                                  @endforeach
                              
                                
                                
                              </select>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="product_name" class=" form-control-label"> Product Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="product_name" name="product_name" placeholder="Enter product Name" class="form-control">
                            </div>
                          </div>
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="product_des" class=" form-control-label">Product Description</label></div>
                            <div class="col-12 col-md-9"><textarea name="product_des" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                          </div>

                          

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="product_price" class=" form-control-label"> Price</label></div>
                            <div class="col-12 col-md-9"><input type="number" id="product_price" name="product_price" placeholder="Enter Product Price" class="form-control">
                            </div>
                          </div>



                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="product_img" class=" form-control-label"> Image</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="product_img" name="product_img" class="form-control-file">
                          </div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3"><label for="product_img_2" class=" form-control-label">Other Image</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="product_img_2" name="product_img_2" class="form-control-file">
                          </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="product_img_3" class=" form-control-label">Other Image</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="product_img_3" name="product_img_3" class="form-control-file">
                          </div>
                        </div>
                      

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="product_name" class=" form-control-label"> Size </label></div>
                            <div class="col-12 col-md-9"><input type="text" id="product_size" name="product_size" placeholder="Enter product Size" class="form-control">
                              <span class="help-block"> (all sizes are optional fields)</span>
                            </div>
                          </div>
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="product_size2" class=" form-control-label"> Size 2</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="product_size2" name="product_size2" placeholder="Enter product Size" class="form-control">
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="product_size3" class=" form-control-label">Size 3</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="product_size3" name="product_size3" placeholder="Enter product Size" class="form-control">
                              
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="product_size4" class=" form-control-label"> Size 4</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="product_size4" name="product_size4" placeholder="Enter product Size" class="form-control">
                              
                            </div>
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

