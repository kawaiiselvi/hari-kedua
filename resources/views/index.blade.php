<!DOCTYPE html>
<html>
<head>
	<title>Ini Halaman</title>
</head>
<body>
<center>

	@foreach ($kopi as $a)
	<li> {{ $a }}</li>
	@endforeach

</center>
</body>
</html>