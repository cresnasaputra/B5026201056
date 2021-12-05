{{-- <!DOCTYPE html>
<html>
<head>
	<title>ABSEN PEGAWAI</title>
</head>
<body> --}}

    @extends('layout.ceria')

    @section('title', 'ABSEN PEGAWAI')

    @section('isikonten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	@foreach($absen as $p)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
		ID <input type="number" required="required" name="ID" value="{{ $p->ID }}"> <br/>
		ID Pegawai <input type="number" required="required" name="IDPegawai" value="{{ $p->IDPegawai }}"> <br/>
		Tanggal <input type="datetime-local" required="required" name="tanggal" value="{{ $p->Tanggal }}"> <br/>
		Status <textarea required="required" name="status">{{ $p->Status }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

    @endsection

{{-- </body>
</html> --}}
