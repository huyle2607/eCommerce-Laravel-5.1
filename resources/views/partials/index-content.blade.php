<div class="content_top  sale">
    		<div class="heading">
    		<h3 class="sale-heading">Big sales</h3>
    		</div>
    		<div class="see sale-heading">
    			<p><a href="#">See all big sale Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
	      @foreach( $sale_products  as $sale_product )
				<div class="grid_1_of_4 images_1_of_4">
					<img src="{{ asset('public/images/sale.png') }}" class="sale-image" alt="Sale" width="60" height="60">
					 <a href="{{ Route('detail', $sale_product->id) }}"><img src="public/images/product_images/{{ $sale_product->image1 }}" alt="" /></a>
					 <h2 style="">{{ str_limit($sale_product->product_name, 19) }}</h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">{{ number_format($sale_product->sale_price, 0, ',', ',') }} &#8363;</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="{{ route('detail', $sale_product->id) }}">Detail</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
					 
				</div>
			@endforeach
				</div>
			</div>
			<div class="content_top">
    		<div class="heading">
    		<h3>New Products</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
	      @foreach( $new_product  as $np )
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="{{ Route('detail', $np->id) }}"><img src="public/images/product_images/{{ $np->image1 }}" alt="" /></a>
					 <h2 style="">{{ str_limit($np->product_name, 19) }}</h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">{{ number_format($np->price, 0, ',', ',') }} &#8363;</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="{{ route('detail', $np->id) }}">Detail</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
					 
				</div>
			@endforeach
				</div>
			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>Feature Products</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
			@foreach($feature_products as $product)
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="{{ Route('detail', $product->id) }}"><img src="{{ asset('public/images/product_images/'.$product->image1) }}" alt="" /></a>					
					 <h2>{{ str_limit($product->product_name, 15) }}</h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">{{ number_format($product->price, 0, ',', ',') }} &#8363;</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="{{ route('detail', $product->id) }}">Detail</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
			@endforeach
			</div>