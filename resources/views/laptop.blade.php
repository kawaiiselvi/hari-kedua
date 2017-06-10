<!DOCTYPE html>
<html>
<head>
	<title>laptop</title>
</head>
<body>

	<h1>Daftar Laptop</h1>
	@foreach ($data as $datas)
	<li> {{ $datas }}</li>
	@endforeach

</body>
</html>