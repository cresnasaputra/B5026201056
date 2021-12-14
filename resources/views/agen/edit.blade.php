@extends('layout.ceria')

@section('title', 'Agen')

@section('isikonten')

        <h3>Edit Agen</h3>

        <a href="/agen"> Kembali</a>

        <br/>
        <br/>

        @foreach($agen as $ag)
        <form action="/agen/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $ag->kodeagen }}"> <br/>
            Nama Agen<input type="text" name="namaagen" required="required"  value="{{ $ag->namaagen }}"> <br/>
		    Jumlah Agen <input type="number" name="jumlahagen" required="required"  value="{{ $ag->jumlahagen }}"> <br/>
		    Ketersediaan <input type="text" name="tersedia" required="required"  value="{{ $ag->tersedia }}"> <br/>
		    <input type="submit" value="Simpan Data">
        </form>
        @endforeach

@endsection
