<!DOCTYPE html>
<!--[if IE 9 ]> <html lang="vi-VN" class="ie9 loading-site no-js"> <![endif]-->
<!--[if IE 8 ]> <html lang="vi-VN" class="ie8 loading-site no-js"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="vi-VN" class="loading-site no-js"> <!--<![endif]-->
<head>
	<base href="{{asset('')}}">
		@yield('style')
</head>
		@yield('body_type')
		@include('header')
		@yield('content')
		@include('footer')
		@yield('script')
		</body>
</html>
