@extends('layouts.customer-layout')
@include('customer_header')

<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(shop_front/images/login-banner.jpg);">
	<h2 class="l-text2 t-center" style="color: #e65540">
		Checkout
	</h2>
</section>

@php
$contents=Cart::content();
@endphp

<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
	<div class="container">
		<!-- Cart item -->
		<form action="{{URL::to('/save_order')}}" method="post">
			{{ csrf_field() }}
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Product</th>
							<th class="column-3">Price</th>
							<th class="column-4">Size</th>

							<th class="column-5">Quantity</th>

							<th class="column-6">Total</th>

							<th class="column-7"></th>
						</tr>
						@foreach ($contents as $content)
						{{-- expr --}}

						<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="{{asset($content->options->image)}}" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2">{{ $content->name }}
								<p>{{ $content->options->brand}}</p>
							</td>
							<td class="column-3">{{$content->price }}</td>
							<td class="column-4">{{ $content->options->size }}</td>
							<td class="column-4">
								{{ $content->qty }}
							</td>						

							<td class="column-6">{{$content->total}}</td>

							
						</tr>

						@endforeach


					</table>
				</div>
			</div>

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
					<div class="size11 bo4 m-r-10">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code" placeholder="Coupon Code">
					</div>

					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<!-- Button -->
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							Apply coupon
						</button>
					</div>
				</div>

				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
					<a href="{{ URL::to('/show_cart') }}"><button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Update Cart
					</button></a>
				</div>
			</div>

			<!-- Total -->
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					Cart Totals
				</h5>

				<!--  -->
				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Subtotal:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						{{Cart::subtotal()}}
					</span>
				</div>

				<!--  -->
				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Shipping:
					</span>

					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
							There are no shipping methods available. Please double check your address, or contact us if you need any help.
						</p>

						
						<textarea class="dis-block s-text7 size18 bo12 p-l-18 p-r-18 p-t-13 m-b-20" name="shipping_address" id="shipping_address" placeholder="Shipping Address..."></textarea>
						
						

						

						<div class="size14 trans-0-4 m-b-10">
							<!-- Button -->
							<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
								Update Totals
							</button>
						</div>
					</div>
				</div>

				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						{{Cart::total()}}
					</span>
				</div>

				<div class="size15 trans-0-4">
					<!-- Button -->
					<button type="submit" class="block2-btn-addorder flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Confirm Order
					</button>
				</a>
			</div>
		</div>
	</div>
</section>
