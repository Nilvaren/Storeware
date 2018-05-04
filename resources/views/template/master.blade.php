<!DOCTYPE html>
<html>
<head>
	<title>Storeware</title>
	@yield('meta')
	@yield('css')
	@yield('js')
</head>
<body>
	<div id="wrapper">
		<div id="header">
			header
		</div>
		<div id="content">
			@yield('content')
		</div>
		<div id="footer">
			footer
		</div>
	</div>
</body>
</html>