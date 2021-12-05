{{-- <!DOCTYPE html>
<html>
<head>
	<title>Tugas CRUD PWEB</title>
</head>
<body> --}}
    @extends('layout.ceria')

    @section('title', 'TUGAS')

    @section('isikonten')

	<h2>TUGAS CRUD PWEB B (5026201056)</h2>
	<h3>Data Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
		ID Pegawai <input type="number" name="idpegawai" required="required"> <br/>
		Tanggal <input type="datetime-local" name="tanggal" required="required"> <br/>
		Nama Tugas <input type="text" name="namatugas" required="required"> <br/>
		Status <input type="text" size="1" name="status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
    @endsection

{{-- </body>
</html> --}}
