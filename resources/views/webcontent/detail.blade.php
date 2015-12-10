<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>{{ $product->product_name }}</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="" rel="stylesheet" type="text/css" media="all"/>
{!! Html::style('public/css/style.css') !!}
{!! Html::script('public/js/jquery-1.7.2.min.js') !!}
{!! Html::script('public/js/move-top.js') !!}
{!! Html::script('public/js/easing.js') !!}
{!! Html::script('public/js/easyResponsiveTabs.js') !!}
{!! Html::style('public/css/easy-responsive-tabs.css') !!}
{!! Html::style('public/css/global.css') !!}
{!! Html::script('public/js/slides.min.jquery.js') !!}
<link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
<script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script>
</head>
<body>
  <div class="wrap">
	<div class="header">
		@include('partials.navbar')     	
   </div>
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="back-links">
    		<p><a href="index.html">Home</a> >>>> <a href="#">Electronics</a></p>
    	    </div>
    		<div class="clear"></div>
    	</div>
    	<div class="section group">
				<div class="cont-desc span_1_of_2">
				  <div class="product-details">				
					<div class="grid images_3_of_2">
						<div id="container">
						   <div id="products_example">
							   <div id="products">
								<div class="slides_container">
									<a href="#" target="_blank">{!! Html::image('public/images/product_images/' .$product->image1) !!}</a>
									<a href="#" target="_blank">{!! Html::image('public/images/product_images/' .$product->image2) !!}</a>
									<a href="#" target="_blank">{!! Html::image('public/images/product_images/' .$product->image3) !!}</a>
								</div>
								<ul class="pagination">
									<li><a href="#">{!! Html::image('public/images/product_images/' .$product->thumbnail1) !!}</a></li>
									<li><a href="#">{!! Html::image('public/images/product_images/' .$product->thumbnail2) !!}</a></li>
									<li><a href="#">{!! Html::image('public/images/product_images/' .$product->thumbnail3) !!}</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="desc span_3_of_2">
				@if($product->sale_price != 0)
				<img src="{{ asset('public/images/sale.png') }}" alt="Sale" class="sale-image-2" width="60" height="60">
				@endif
					<h2>{{ $product->product_name }}</h2>
					<p>{{ $product->short_description }}</p>
					<!-- Regular price -->
					<div class="price">
					@if($product->sale_price == 0)
						<p>Price: <span>{{ number_format($product->price, 0,',',',') }} &#8363;</span></p>
						</div>
						@else
						<p>Price: <span class="cross">{{ number_format($product->price, 0,',',',') }} &#8363;</span></p>
						</div>
						<!-- Sale price -->
						<div class="price">
						<p>Sale: <span>{{ number_format($product->sale_price, 0,',',',') }} &#8363;</span></p>
						<h2>Save: {{ number_format($product->price - $product->sale_price, 0, ',', ',') }} &#8363; to your budget</h2>
						</div>
					@endif
				<div class="share-desc">
					<div class="share">
						<p>Share Product :</p>
						<ul>
					    	<li><a href="#">{!! Html::image('public/images/facebook.png') !!}</a></li>
					    	<li><a href="#">{!! Html::image('public/images/twitter.png') !!}</a></li>					    
			    		</ul>
					</div>
					<div class="button"><span><a href="{{ route('addToCart', $product->id) }}">Add to Cart</a></span></div>					
					<div class="clear"></div>
				</div>
				 <div class="wish-list">
				 	<ul>
				 		<li class="wish"><a href="#">Add to Wishlist</a></li>
				 	    <li class="compare"><a href="#">Add to Compare</a></li>
				 	</ul>
				 </div>
			</div>
			<div class="clear"></div>
		  </div>
		<div class="product_desc">	
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li>Product Details</li>
					<li>Degital info</li>
					<li>Product Reviews</li>
					<div class="clear"></div>
				</ul>
				<div class="resp-tabs-container">
					<div class="product-desc">
						<p>{{ $product->description }}</p>
						</div>

				 <div class="product-tags">
						 <p>{{ $product->product_info }}</p>
			    </div>	

				<div class="review">
					<h4>Lorem ipsum Review by <a href="#">Finibus Bonorum</a></h4>
					 <ul>
					 	<li>Price :<a href="#">{!! Html::image('public/images/price-rating.png') !!}</a></li>
					 	<li>Value :<a href="#">{!! Html::image('public/images/value-rating.png') !!}</a></li>
					 	<li>Quality :<a href="#">{!! Html::image('public/images/quality-rating.png') !!}</a></li>
					 </ul>
					 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				  <div class="your-review">
				  	 <h3>How Do You Rate This Product?</h3>
				  	  <p>Write Your Own Review?</p>
				  	  <form>
					    	<div>
						    	<span><label>Nickname<span class="red">*</span></label></span>
						    	<span><input type="text" value=""></span>
						    </div>
						    <div><span><label>Summary of Your Review<span class="red">*</span></label></span>
						    	<span><input type="text" value=""></span>
						    </div>						
						    <div>
						    	<span><label>Review<span class="red">*</span></label></span>
						    	<span><textarea> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="SUBMIT REVIEW"></span>
						  </div>
					    </form>
				  	 </div>				
				</div>
			</div>
		 </div>
	 </div>
	    <script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
   </script>		
   <div class="content_bottom">
    		<div class="heading">
    		<h3>Related Products</h3>
    		</div>
    		<div class="see">
    			<p><a href="{{ route('show.typeproducts', $product->type_id) }}">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
   <div class="section group">
   	@foreach( $related_product as $rp)
				<div class="grid_1_of_4 images_1_of_4">
				@if($rp->sale_price != 0)
				<img src="{{ asset('public/images/sale.png') }}" class="sale-image" alt="" width="60" height="60">
				@endif
					 <a href="{{ route('detail', $rp->id) }}">{!! Html::image('public/images/product_images/'.$rp->image1) !!}</a>					
					<div class="price" style="border:none">
					       		<div class="add-cart" style="float:none">								
									<h4><a href="{{ route('detail', $rp->id) }}">Detail</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				@endforeach
			</div>
        </div>
				<div class="rightsidebar span_3_of_1">
					<h2>CATEGORIES</h2>
					<ul>
					@foreach( $type as $t )
				      <li><a href="{{ route('show.typeproducts', $t->id) }}">{{ $t->type_name }}</a></li>
				    @endforeach
    				</ul>
    				<div class="subscribe">
    					<h2>Newsletters Signup</h2>
    						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.......</p>
						    <div class="signup">
							    <form>
							    	<input type="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';"><input type="submit" value="Sign up">
							    </form>
						    </div>
      				</div>
      				 <div class="community-poll">
      				 	<h2>Community POll</h2>
      				 	<p>What is the main reason for you to purchase products online?</p>
      				 	<div class="poll">
      				 		<form>
      				 			<ul>
									<li>
									<input type="radio" name="vote" class="radio" value="1">
									<span class="label"><label>More convenient shipping and delivery </label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="2">
									<span class="label"><label for="vote_2">Lower price</label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="3">
									<span class="label"><label for="vote_3">Bigger choice</label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="5">
									<span class="label"><label for="vote_5">Payments security </label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="6">
									<span class="label"><label for="vote_6">30-day Money Back Guarantee </label></span>
									</li>
									<li>
									<input type="radio" name="vote" class="radio" value="7">
									<span class="label"><label for="vote_7">Other.</label></span>
									</li>
									</ul>
      				 		</form>
      				 	</div>
      				 </div>
 				</div>
 		</div>
 	</div>
    </div>
 </div>
   @include('partials.footer')
</body>
</html>
