<!DOCTYPE html>
<html>
<head>
	<title>binatang</title>
</head>
<body>

	<h1>Daftar Binatang</h1>
	@foreach ($data as $datas)
	<li> {{ $datas }}</li>
	@endforeach

</body>
</html>