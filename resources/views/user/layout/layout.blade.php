<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Dashboard</title>

	<link rel="stylesheet" type="text/css" href="{{asset('user_theme/admin.css')}}">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

	@include('user.layout.header')


	@include('user.layout.sidebar')
	


	<div class="content">
		
		@yield('content')

		


	</div>
	<!-- Custom Theme Scripts -->
    <script src="{{asset('user_theme/build/js/custom.min.js')}}"></script>
	@stack('footer-script')

</body>
</html>