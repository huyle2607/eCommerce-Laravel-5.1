<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>@yield('head.title')</title>
@yield('head.linkandscript')
<!-- DETAIL PAGE -->
{!! Html::style('public/css/style.css') !!}
{!! Html::style('public/css/easy-responsive-tabs.css') !!}
{!! Html::style('public/css/global.css') !!}
{!! Html::style('public/js/slides.min.jquery.js') !!}
{!! Html::script('public/js/jquery-1.7.2.min.js') !!}
{!! Html::script('public/js/move-top.js') !!}
{!! Html::script('public/js/easing.js') !!}
{!! Html::script('public/js/easyResponsiveTabs.js') !!}
{!! Html::script('public/js/slides.js') !!}
<!-- INDEX PAGE -->
{!! Html::style('public/css/slider.css') !!}
{!! Html::script('public/js/startstop-slider.js') !!}
{!! Html::style('public/css/app.css') !!}

@yield('head.linkandscript2')
</head>
<body>
@yield('body.content')
@include('partials.footer')
</body>
</html>

