<div class="headertop_desc">
			<div class="call">
				 <p style="font-size: 18px">
				 @if(Auth::guest())
				 <span>Welcome to HOME SHOPPE, folk!</span>
				 @else
				 <span>Hello {{ Auth::user()->name }}</span>
				 @endif
				 </p>
			</div>
			<div class="account_desc">
				<ul>
				@if(Auth::guest())
					<li><a href="{{ route('register') }}">Register</a></li>
					<li><a href="{{ route('login') }}">Login</a></li>
				@else
					@if(Auth::user()->is_admin == 1)
						<li><a href="{{ route('admin.dashboard') }}">Admin</a></li>
						<li><a href="{{ url('/logout') }}">Logout!</a></li>
					@else
						<li><a href="{{ route('mycart') }}">My Cart</a></li>
						<li><a href="{{ url('/logout') }}">Logout!</a></li>
					@endif	
				@endif
				</ul>
			</div>
			<div class="clear"> </div>
		</div>
		<div class="header_top">
			<div class="logo">
				<a href="{{ route('homepage') }}">{!! Html::image('public/images/logo.png') !!}</a>
			</div>
			  <div class="cart">
			  	   <p>Home Shoppe
			  	   <span>Cart:</span><div id="dd" class="wrapper-dropdown-2"><a href="{{ route('mycart') }}">0 item(s) - $0.00</a>
			  	   	<ul class="dropdown">
							<li>You have no items in your Shopping cart</li>
					</ul></div></p>
			  </div>
			  <script type="text/javascript">
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

			});

		</script>
	 <div class="clear"></div>
  </div>
	<div class="header_bottom">
	     	<div class="menu">
	     		<ul>
			    	<li><a href="{{ route('homepage') }}" style="text-decoration: none; font-family: 'ambleregular';">Home</a></li>
			    	<li><a href="{{ Route('show.products') }}" style="text-decoration: none; ">Products</a></li>
			    	<li><a href="{{ Route('about') }}" style="text-decoration: none; ">About</a></li>
			    	<li><a href="{{ Route('delivery') }}" style="text-decoration: none; ">Delivery</a></li>
			    	<li><a href="{{ Route('contact') }}" style="text-decoration: none; ">Contact</a></li>
			    	<div class="clear"></div>
     			</ul>
	     	</div>
	     	<div class="search_box">
	     		<form action="{{ route('show.searchProducts') }}" method="GET">
	     			<input type="text" name="keyword" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
	     			<input type="submit" value="">
	     		</form>
	     	</div>
	     	<div class="clear"></div>
</div>	