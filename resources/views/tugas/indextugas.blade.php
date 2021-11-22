<!DOCTYPE html>
<html>
<head>
	<title>Tugas CRUD PWEB</title>
</head>
<body>

	<h2>TUGAS CRUD PWEB B (5026201056)</h2>
	<h3>Data Tugas</h3>

	<a href="/tugas/tambah"> + Tambah Tugas Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Nama Tugas</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($tugas as $t)
		<tr>
			<td>{{ $t->id_pegawai }}</td>
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


</body>
</html>
