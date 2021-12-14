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

	<a href="/tugas/tambah"> + Tambah Tugas Baru</a>

	<br/>
	<br/>

	<table class="table table-success table-striped">
		<tr>
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Nama Tugas</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($tugas as $t)
		<tr>
			<td>{{ $t->pegawai_nama }}</td>
			<td>{{ $t->tanggal }}</td>
			<td>{{ $t->namaTugas }}</td>
			<td>{{ $t->status }}</td>
			<td>
				<a href="/tugas/edit/{{ $t->id }}">Edit</a>
				|
				<a href="/tugas/hapus/{{ $t->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $tugas->links() }}

    @endsection
{{-- </body>
</html> --}}
