<!DOCTYPE html>
<html>
<head>
	<title>Kendaraan</title>
</head>
<body>

	<h1>Daftar Kendaraan</h1>
	@foreach ($data as $datas)
	<li> {{ $datas }}</li>
	@endforeach

</body>
</html>