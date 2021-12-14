@extends('layout.ceria')

@section('title', 'Agen')

@section('isikonten')

<h3>Data Agen</h3>

<a href="/agen"> Kembali</a>

<br/>
<br/>
<div class="container">
    <form action="/agen/store" method="post">
        {{ csrf_field() }}
    <div class="row">
        <div class="col-sm-2">
            Nama Agen <br>
            Jumlah Agen <br>
            Ketersediaan <br>
        </div>
        <div class="col-sm-1">
            : <br>
            : <br>
            : <br>
        </div>
        <div class="col-sm-9">
            <input type="text" name="namaagen" required="required"> <br/>
            <input type="number" name="jumlahagen" required="required"> <br/>
            <input type="text" name="tersedia" required="required"> <br/>
        </div>
    </div>
    <input type="submit" value="Simpan Data">
    </form>

    {{-- <form action="/agen/store" method="post">
		{{ csrf_field() }}
		Nama Agen<input type="text" name="namaagen" required="required"> <br/>
		Jumlah Agen <input type="number" name="jumlahagen" required="required"> <br/>
		Ketersediaan <input type="text" name="tersedia" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form> --}}
</div>


@endsection
