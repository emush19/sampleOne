<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sample One</title>
		{!! Html:style(assests/css/bootstrap.min.css) !!}
	</head>

	<body>
		@yield('content');
		{!! Html:script(assests/js/jquery.min.js) !!}
		{!! Html:script(assests/js/bootstrap.min.js) !!}
	</body>
</html>