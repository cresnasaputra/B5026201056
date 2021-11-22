<!DOCTYPE html>
<html>
<head>
	<title>TUGAS CRUD PWEB B</title>
</head>
<body>

	<h2>TUGAS CRUD PWEB B (5026201056)</h2>
	<h3>Edit Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $t)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $t->id }}"> <br/>
		ID Pegawai <input type="number" required="required" name="idpegawai" value="{{ $t->id_pegawai }}"> <br/>
		Tanggal <input type="datetime-local" required="required" name="tanggal" value="{{ $t->tanggal }}"> <br/>
		Nama Tugas <input type="text" required="required" name="namatugas" value="{{ $t->namaTugas }}"> <br/>
		status  <input type="text" required="required" name="stauts" value="{{ $t->status }}"><br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
