<!DOCTYPE html>
<html>

<head>
	@include('includes.head')
</head>
	
<body>
	
	<div class="navbar" id="nav_Section">
		@include('includes.navbar')
	</div>

	<div class="container">
		@yield('content')
	</div>

	<div class="footer">
		@include('includes.footer')
	</div>
</body>

</html>