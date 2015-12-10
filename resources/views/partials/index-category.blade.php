<div class="glossymenu">
    <h3>
    	<a class="menuitem submenuheader" href="{{ route('show.typeproducts', 1) }}">
    		Mobile
    	</a>
    </h3>
        <div class="submenu">
              <ul>
              @foreach( $brands_mobile as $brand )
                 <li><a href="{{ route('show.brandproducts',[1, $brand->id]) }}">{{ $brand->brand_name }}</a></li>
              @endforeach
              </ul>
        </div>
        <h3>
    	<a class="menuitem submenuheader" href="{{ route('show.typeproducts', 2) }}">
    		Desktop
    	</a>
    </h3>
        <div class="submenu">
              <ul>
              @foreach( $brands_desktop as $brand )
                 <li><a href="{{ route('show.brandproducts',[2, $brand->id]) }}">{{ $brand->brand_name }}</a></li>
              @endforeach
              </ul>
        </div>
        <h3>
    	<a class="menuitem submenuheader" href="{{ route('show.typeproducts', 3) }}">
    		Laptop
    	</a>
    </h3>
        <div class="submenu">
              <ul>
              @foreach( $brands_laptop as $brand)
                 <li><a href="{{ route('show.brandproducts',[3, $brand->id]) }}">{{ $brand->brand_name }}</a></li>
          @endforeach
          </ul>
    </div>
    <h3>
	<a class="menuitem submenuheader" href="{{ route('show.typeproducts', 4) }}">
		Camera
	</a>
</h3>
    <div class="submenu">
          <ul>
          @foreach( $brands_camera as $brand)
             <li><a href="{{ route('show.brandproducts',[4, $brand->id]) }}">{{ $brand->brand_name }}</a></li>
          @endforeach
          </ul>
    </div>
    <h3>
	<a class="menuitem submenuheader" href="{{ route('show.typeproducts', 5) }}">
		Television
	</a>
</h3>
    <div class="submenu">
          <ul>
          @foreach( $brands_tv as $brand )
             <li><a href="{{ route('show.brandproducts',[5, $brand->id]) }}">{{ $brand->brand_name }}</a></li>
          @endforeach
          </ul>
    </div>
</div>