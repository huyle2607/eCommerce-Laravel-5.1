<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Test</title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<a class="navbar-brand" href="#">Title</a>
		<ul class="nav navbar-nav">
			<li class="active">
				<a href="#">Home</a>
			</li>
			<li>
				<a href="#">Link</a>
			</li>
		</ul>
	</nav>
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
		@foreach($product as $p)
			<div class="col-sm-2" style="border: solid">
				<img src="{{ $p->image1 }}" alt="">
				<h2>{{ $p->product_name }}</h2>
				<p>{{ $p->description }}</p>
				<h3>{{ $p->price }}</h3>
			</div>
		@endforeach
		</div>
	</div>
</body>
</html>