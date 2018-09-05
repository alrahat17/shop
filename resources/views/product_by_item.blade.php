@extends('layouts.customer-layout')
@include('customer_header')

<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
				<div class="leftbar p-r-20 p-r-0-sm">
					<!--  -->
					<h4 class="m-text14 p-b-7">
						Brands
					</h4>
					@foreach ($brands as $brand)
					{{-- expr --}}
					
					
					<li class="p-t-4">
						<a href="{{ URL::to('/product_by_brand/'.$brand->id) }}">{{$brand->brand_name}}</a>
					</li>
					
					@endforeach

					

					<div class="filter-price p-t-22 p-b-50 bo3">				
						<div class="row">
							<div class="col-sm-6">
								<div class="leftbar">
									<!--  -->
									<h4 class="m-text14 p-b-7">
										Items
									</h4>
									@foreach ($items as $item)
									{{-- expr --}}
									
									
									<li class="p-t-4">
										<a href="{{ URL::to('/product_by_item/'.$item->id) }}">{{$item->item_name}}</a>
									</li>
									
									@endforeach
								</div>
							</div>
						</div>

					</div>

					<div class="search-product pos-relative bo4 of-hidden">
						<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">

						<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
							<i class="fs-12 fa fa-search" aria-hidden="true"></i>
						</button>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
				<!--  -->
				<div class="flex-sb-m flex-w p-b-35">
					<div class="flex-w">

					</div>
				</div>

				<!-- Product -->
				<div class="row">
					@foreach ($customerproducts as $product)
					<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<img src="{{url($product->product_img)}}" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="{{ route('customerproducts.show',$product->product_id)}}" class="block2-name dis-block s-text3 p-b-5">
									{{ $product->product_name}}
									<p>{{ $product->brand->brand_name }}</p>
								</a>

								<span class="block2-price m-text6 p-r-5">
									
									৳{{ $product->product_price }}
								</span>
							</div>
						</div>
					</div>

					@endforeach

					
				</div>
			</div>
		</div>

		<!-- Pagination -->
		<div class="pagination flex-m flex-w p-t-26">
			{!!$customerproducts->links();!!}
		</div>
	</div>
</div>
</div>
</section>


