@extends('layouts.customer-layout')
@include('customer_header')


<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
	<a href="index.html" class="s-text16">
		Home
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<a href="product.html" class="s-text16">
		{{ $product->category->category_name }}
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<a href="#" class="s-text16">
		{{ $product->item->item_name }}
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<span class="s-text17">
		{{ $product->product_name }}
	</span>
</div>

<!-- Product Detail -->
<div class="container bgwhite p-t-35 p-b-80">
	<div class="flex-w flex-sb">
		<div class="w-size13 p-t-30 respon5">
			<div class="wrap-slick3 flex-sb flex-w">
				<div class="wrap-slick3-dots"></div>

				<div class="slick3">
					<div class="item-slick3" data-thumb="{{ asset($product->product_img) }}">
						<div class="wrap-pic-w">
							<img src="{{ asset($product->product_img) }}" alt="IMG-PRODUCT">
						</div>
					</div>

					<div class="item-slick3" data-thumb="{{ asset($product->product_img_2) }}">
						<div class="wrap-pic-w">
							<img src="{{ asset($product->product_img_2) }}" alt="IMG-PRODUCT">
						</div>
					</div>

					<div class="item-slick3" data-thumb="{{ asset($product->product_img_3) }}">
						<div class="wrap-pic-w">
							<img src="{{ asset($product->product_img_3) }}" alt="IMG-PRODUCT">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="w-size14 p-t-30 respon5">
			<h4 class="product-detail-name m-text16 p-b-13">
				{{ $product->product_name }}
				<p>{{ $product->brand->brand_name }}</p>

			</h4>

			<span class="m-text17">
				৳{{ $product->product_price }}
			</span>



			<form action="{{URL::to('/add_to_cart')}}" method="post">
				{{ csrf_field() }}
				<div class="p-t-33 p-b-60">
					<div class="flex-m flex-w p-b-10">
						<div class="s-text15 w-size15 t-center">
							Size
						</div>
						<select class="custom-select" name="select_product_size" id="select_product_size">
							<option selected>Select...</option>
							<option value="1">{{ $product->product_size }}</option>
							<option value="2">{{ $product->product_size2 }}</option>
							<option value="3">{{ $product->product_size3 }}</option>
							<option value="4">{{ $product->product_size4 }}</option>
						</select>
					</div>




					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">

								<input class="size8 m-text18 t-center num-product" type="number" name="qty" id="qty" value="1">
							</div>

							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!--
								<button type="submit" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>Button -->
								<input type="hidden" name="product_id" id="product_id" value="{{ $product->product_id }}">


								<button type="submit" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>

							</div>
						</div>
					</div>
				</div>
			</form>

			<div class="p-b-45">
				<span class="s-text8 m-r-35">SKU: MUG-01</span>
				<span class="s-text8">Categories:	{{ $product->category->category_name }} </span>
			</div>

			<!--  -->
			<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
				<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
					Description
					<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
					<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
				</h5>

				<div class="dropdown-content dis-none p-t-15 p-b-23">
					<p class="s-text8">
						{{ $product->product_des }}
					</p>
				</div>
			</div>

			<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
				<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
					Additional information
					<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
					<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
				</h5>

				<div class="dropdown-content dis-none p-t-15 p-b-23">
					<p class="s-text8">
						Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
					</p>
				</div>
			</div>

			<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
				<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
					Reviews (0)
					<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
					<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
				</h5>

				<div class="dropdown-content dis-none p-t-15 p-b-23">
					<p class="s-text8">
						Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
					</p>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Relate Product -->
<section class="relateproduct bgwhite p-t-45 p-b-138">
	<div class="container">
		<div class="sec-title p-b-60">
			<h3 class="m-text5 t-center">
				Related Products
			</h3>
		</div>

		<!-- Slide2 -->
		<div class="wrap-slick2">
			<div class="slick2">
				@foreach($rel_pros as $rel_pro)
				<div class="item-slick2 p-l-15 p-r-15">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
							<img src="{{asset($rel_pro->product_img)}}" alt="IMG-PRODUCT">

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
							<a href="{{route('customerproducts.show',$rel_pro->product_id)}}" class="block2-name dis-block s-text3 p-b-5">
								{{ $rel_pro->product_name }}
								<p>{{ $product->brand->brand_name }}</p>
							</a>

							<span class="block2-price m-text6 p-r-5">
								৳{{ $rel_pro->product_price }}
							</span>
						</div>
					</div>
				</div>

				@endforeach


			</div>
		</div>
	</div>
</div>

</div>
</section>
