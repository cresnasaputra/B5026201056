{{-- <!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body> --}}

@extends('layout.ceria')

@section('title', 'Pegawai')

@section('isikonten')

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <h3>Data Pegawai</h3>

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a><br>

    <div class="container" align='left'>
        <form action="/pegawai/cari" method="GET">
            <input type="text" name="cari" placeholder="Cari Pegawai berdasarkan nama atau alamat.." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-danger" value="CARI">
        </form>
    </div>
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Nama</th>
			{{-- <th>Jabatan</th>
			<th>Umur</th> --}}
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			{{-- <td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td> --}}
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/view/{{ $p->pegawai_id }}">View Detail</a>

				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table> <br>

        {{ $pegawai->links() }}
    </div>
    <div class="col-sm-3"></div>

    </div>

@endsection


{{-- </body>
</html> --}}
