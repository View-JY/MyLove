<!DOCTYPE html>
<html ang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" type="text/css" href="{{  asset('css/admin.css') }}">
</head>
<body>
	<div class="" id="wrapper">
        @include('admin.layouts._nav')

		@include('admin.layouts._slidebar')

		<div id="page-wrapper">
			<div class="container" id="app">
				 @yield('content')
			</div>
		</div>
	</div>

	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/jquery.metisMenu.js') }}"></script>
	<script src="{{ asset('js/custom-script.js') }}"></script>
</body>
</html>