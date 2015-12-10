<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Product types</title>
	<link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
	{!! Html::style('public/css/style.css') !!}
	{!! Html::script('public/js/jquery-1.7.2.min.js') !!}
	{!! Html::script('public/js/move-top.js') !!}
	{!! Html::script('public/js/easing.js') !!}
	{!! Html::script('public/js/easyResponsiveTabs.js') !!}
	{!! Html::style('public/css/easy-responsive-tabs.css') !!}
	{!! Html::style('public/css/global.css') !!}
	{!! Html::script('public/js/slides.min.jquery.js') !!}
</head>
<body>
	<div class="wrap">
		<div class="header">
			@include('partials.navbar')
		</div>
		<div class="main">
			
		</div>
	</div>
	@include('partials.footer')
</body>
</html>