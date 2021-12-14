{{-- <!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body> --}}
    @extends('layout.ceria')

    @section('title', 'Pegawai')

    @section('isikonten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)

		Nama : {{ $p->pegawai_nama }} <br/>
		Jabatan : {{ $p->pegawai_jabatan }} <br/>
		Umur : {{ $p->pegawai_umur }} <br/>
		Alamat : {{ $p->pegawai_alamat }}<br/>

	@endforeach

    @endsection

{{-- </body>
</html> --}}
