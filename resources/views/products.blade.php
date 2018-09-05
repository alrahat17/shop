@extends('layouts.customer-layout')
@include('customer_header')

<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(shop_front/images/login-banner.jpg);">
	<h2 class="l-text2 t-center">
		Products
	</h2>
</section>




<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
				<div class="leftbar p-r-20 p-r-0-sm">
					<!--  -->
					<h4 class="m-text14 p-b-7">
						Items
					</h4>

					<ul class="p-b-54">
						
						@foreach ($items as $item)
						{{-- expr --}}
						
						<li class="p-t-4">
							<a href="{{ URL::to('/product_by_item/'.$item->id) }}" class="s-text13 active1">
								{{ $item->item_name }}
							</a>
						</li>
						@endforeach
						
					</ul>

					<!--  -->
					<h4 class="m-text14 p-b-7">
						Brands
					</h4>

					<ul class="p-b-54">
						
						@foreach ($brands as $brand)
						{{-- expr --}}
						
						<li class="p-t-4">
							<a href="{{ URL::to('/product_by_brand/'.$brand->id) }}" class="s-text13 active1">
								{{ $brand->brand_name }}
							</a>
						</li>
						@endforeach
						
					</ul>

					
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
				

				<!-- Product -->
				<div class="row">
					@foreach ($customerproducts as $product)
					{{-- expr --}}
					
					<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<img src="{{$product->product_img}}" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="{{ route('customerproducts.show',$product->product_id)}}" class="block2-name dis-block s-text3 p-b-5">
									{{ $product->product_name }}
								</a>

								<span class="block2-price m-text6 p-r-5">
									{{ $product->product_price}}
								</span>
							</div>
						</div>
					</div>

					@endforeach

				</div>
			</div>
			

			

			

			<!-- Pagination -->
			<div class="pagination">
				{!!$customerproducts->links();!!}
			</div>
		</div>
	</div>
</div>
</section>


