<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>Electronic store</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
<script type="text/javascript" src="{{ asset('public/js/bootstrap.min.js') }}"></script>
{!! Html::style('public/css/style.css') !!}
{!! Html::style('public/css/slider.css') !!}
{!! Html::script('public/js/jquery-1.7.2.min.js') !!}
{!! Html::script('public/js/move-top.js') !!}
{!! Html::script('public/js/easing.js') !!}
{!! Html::script('public/js/startstop-slider.js') !!}
<link rel="stylesheet" type="text/css" href="{{ asset('public/css/menu.css')}}">
<script type="text/javascript" src="{{ asset('public/js/ddaccordion.js')}}"></script>
<script type="text/javascript">
ddaccordion.init({
  headerclass: "submenuheader", //Shared CSS class name of headers group
  contentclass: "submenu", //Shared CSS class name of contents group
  revealtype: "mouseover", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
  mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
  collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
  defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
  onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
  animatedefault: false, //Should contents open by default be animated into view?
  persiststate: true, //persist state of opened contents within browser session?
  toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
  animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
  oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
    //do nothing
  },
  onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
    //do nothing
  }
})
</script>
<link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
</head>
<body>
  <div class="wrap">
	<div class="header">
	@include('partials.navbar')
	<div class="header_slide">
			<div class="header_bottom_left">				
				<div class="categories">
				<ul>
					<h3>Categories</h3>
				</ul>
				<!-- Categories -->
				 @include('partials.index-category')
				</div>		
	  	     </div>
  	     <!-- Index Slider -->
			 <div class="header_bottom_right">					 
			 	<div class="row-height">
			 	@if(count($products) == 0)
			 	<img src="{{ asset('public/images/404.jpg') }}" alt="">
			 	@endif
				 	@foreach($products as $p)
						<div class="sub-row  product">
						@if($p->sale_price != 0)
						<img src="{{ asset('public/images/sale.png') }}" alt="Sale" class="sale-image" width="60" height="60">
						@endif
						  <a href="{{ route('detail', $p->id) }}">
						  {!! Html::image('public/images/product_images/' .$p->image1,
						  'Product image', 
						  array('width' => '225px', 'height' => 'auto','style' => 'margin-left: 0px')) !!}
						  </a>
						  <br><br>
						  <p align="center">{{ str_limit($p->product_name, 15) }}</p>
						  @if($p->sale_price != 0)
						  <p id="price">{{ number_format($p->sale_price, 0,',',',') }} &#8363;</p>
						  @else
						  <p id="price">{{ number_format($p->price, 0,',',',') }} &#8363;</p>
						  @endif
						  
						</div>
					@endforeach
				 </div>
			 </div>
			 <div class="row">
			 	<div>{!! $products->render() !!}</div>
			 </div>
	  		 <div class="clear"></div>
			</div>
   </div>
</div>
@include('partials.footer')
</body>
</html>
