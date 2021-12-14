@extends('layout.ceria')

@section('title', 'Agen')

@section('isikonten')

    {{-- <div class="row">
        <div class="col-xl-1"></div>
        <div class="col-xl-10"> --}}


            <div class="container" align='left'>

                <h3>Data Agen</h3>

                <a href="/agen/tambah"> + Tambah Agen Baru</a><br>

                <form action="/agen/cari" method="GET">
                    <input type="text" name="cari" placeholder="Cari Agen..." value="{{ old('cari') }}" style="width: 80%">
                    <input type="submit" class="btn btn-danger" value="CARI">
                </form><br>
            <div>
                <table class="table table-success table-striped">
                    <tr style="text-align: center">
                        <th>Nama Agen</th>
                        <th>Ketersediaan</th>
                        <th>Opsi</th>
                    </tr>
                    @foreach($agen as $ag)
                    <tr style="text-align: center">
                        <td>{{ $ag->namaagen }}</td>
                        <td>{{ $ag->tersedia }}</td>
                        <td>
                            <a href="/agen/view/{{ $ag->kodeagen }}" class="btn btn-danger">Detail</a>
                            |
                            <a href="/agen/edit/{{ $ag->kodeagen }}" class="btn btn-warning" >Edit</a>
                            |
                            <a href="/agen/hapus/{{ $ag->kodeagen }}" class="btn btn-danger" >Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {{ $agen->links() }}
                <div class="row">
                    <div class="col-sm-2">
                        Keterangan<br>
                        Tersedia <br>
                        Tidak Tersedia <br>
                    </div>
                    <div class="col-sm-1">
                        <br>
                        : <br>
                        :
                    </div>
                    <div class="col-sm-9"> <br>
                        R <br>
                        N <br>
                    </div>
                </div>
            </div>
        {{-- </div>
        <div class="col-xl-1"></div>
    </div> --}}

@endsection
