<!DOCTYPE html>
<html>
	<head>
		<title>Shopping Cart</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap.min.css') }}"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('public/css/custom.css') }}"/>
		<link rel="stylesheet" href="{{ asset('public/assets-admin/font-awesome/css/font-awesome.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('public/css/app.css') }}">		
	</head>

	<body>
		
		<nav class="navbar">
			<div class="container">
				<a class="navbar-brand" href="#">Khách hàng: {{Auth::user()->name}}</a>
				<div class="navbar-right">
					<div class="container minicart"></div>
				</div>
			</div>
		</nav>
		
		<div class="container-fluid breadcrumbBox text-center">
			<ol class="breadcrumb">
				<li><a href="{{ route('homepage') }}"><img src="{{asset('public/images/logo.png')}}" alt="Home shopping" class="logoHome"></a></li>
			</ol>
		</div>
		
		<div class="container text-center">

			<div class="col-md-2 col-sm-12">
				<div class="bigcart"></div>
				<a href="{{ route('homepage') }}"><img src="" alt=""></a>
			</div>
			
			<div class="col-md-10 col-sm-12 text-left">
				<ul>
				<table class="table table-hover">
					<li class="row list-inline columnCaptions">
					<form action="{{ route('updateItem') }}" method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<thead>
						<tr>
							<th><span>Quantity</span></th>
							<th style="text-align: center"><span>Name</span></th>
							<th><span>Price</span></th>
							<th><span>Actions</span></th>
						</tr>
					</thead>
					</li>
					@if(count($items))
					@foreach($items as $item)
					<li class="row">
						<tbody>
							<tr>
							<input type="hidden" name="rowid" value="{{ $item->rowid }}">
								<td><input type="number" name="quantity" id="quantity" class="form-control cart-price" value="{{ $item->qty }}" min="1" required="required"></td>
								<td><span class="itemName">{{ $item->name }}</span></td>
								<td><span class="price">{{ number_format($item->price, 0, ',',',') }} &#8363;</span></td>
								<td>
									<button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-refresh"></i></button>
									<a href="{{ route('removeItem', $item->rowid) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
								</td>
							</tr>
						</tbody>
					</li>
					@endforeach
					@else
					<li class="row">
						<tbody>
							<tr>
								<td><input type="number" name="price" id="inputPrice" class="form-control cart-price" value="0" min="1" required="required"></td>
								<td><span class="itemName">None</span></td>
								<td><span class="price">0 &#8363;</span></td>
								<td>
									<button class="btn btn-primary btn-xs"><i class="fa fa-refresh"></i></button>
									<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
								</td>
							</tr>
						</tbody>
					</li>
					@endif
					</form>
					</table>
					@if(count($items))
					<div class="text-right" style="float: right"><i class="glyphicon glyphicon-hand-right"></i><font style="font-size: 30px">  Total:&nbsp;&nbsp;</font>
						<span class="total-price">{{ number_format($total,0, ',', ',') }} &#8363;</span>
					</div>
					@else
					<div class="text-right" style="float: right"><i class="glyphicon glyphicon-hand-right"></i><font style="font-size: 30px">  Total:&nbsp;&nbsp;</font>
						<span class="total-price">0 &#8363;</span>
					</div>
					@endif
				</ul>
			</div>
		</div>
		<!-- JavaScript includes -->
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
		<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('public/js/customjs.js') }}"></script>

	</body>
</html>