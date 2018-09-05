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
					@foreach ($data as $row)
					{{-- expr --}}
					
					
					<li class="p-t-4">
						<a href="{{ URL::to('product_by_brand/'.$row->id) }}" class="s-text13 active1">" 
							{{ $row->brand_name }}
						</a>
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
									@foreach ($data as $row)
									{{-- expr --}}
									
									
									<li class="p-t-4">
										<a href="#" class="s-text13 active1">
											{{ $row->item_name }}
										</a>
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