<!DOCTYPE html>
<html>
	<head>
		<title>Default Title</title>
		{{
			Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css')
		}}
	</head>

	<body>
		<div class="container">
			<div class="jumbotron">
				<h1> Template Form </h1>
				<p> @yield('content') </p>
				<p><a href="#" class="btn btn-primary btn-lg"> Learn some </a></p>	
			</div>
		</div>
		
		
	</body>
</html>