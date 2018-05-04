<!DOCTYPE html>
<html>
<head>
	<title>Storeware</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	@yield('js')
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<ul>
				<li>Storeware</li>
				<li>Home</li>
				<li>About Us</li>
				<li>Login</li>
			</ul>
		</div>
		<div id="content">
			@yield('content')
		</div>
		<div id="footer">
		</div>
	</div>
</body>
</html>