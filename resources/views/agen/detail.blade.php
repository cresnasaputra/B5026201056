@extends('layout.ceria')

@section('title', 'Agen')

@section('isikonten')
    <h3>Detail Agen</h3>

    <a href="/agen"> Kembali</a>

    <br/>
    <br/>
    <div class="container">
        <div class="row">
            @foreach($agen as $ag)

            <div class="col-sm-3">
                Kode Agen <br>
                Nama Agen <br>
                Jumlah Agen <br>
                Ketersediaan <br>
            </div>
            <div class="col-sm-1">
                : <br>
                : <br>
                : <br>
                : <br>
            </div>
            <div class="col-sm-6">
                {{ $ag->kodeagen }} <br/>
                {{ $ag->namaagen }} <br/>
                {{ $ag->jumlahagen }} <br/>
                {{ $ag->tersedia }}<br/>
            </div>
            @endforeach
        </div>
    </div>

@endsection
