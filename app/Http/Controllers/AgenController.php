<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgenController extends Controller
{
    //
    public function index()
    {
    	// mengambil data dari table tugas
    	$agen = DB::table('agen')->paginate(5);

    	// mengirim data tugas ke view index
    	return view('agen.index',['agen' => $agen]);

    }

    public function detail($id)
    {
	// mengambil data pegawai berdasarkan id yang dipilih
	$agen = DB::table('agen')->where('kodeagen',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('agen.detail',['agen' => $agen]);
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

	// memanggil view tambah
	return view('agen.tambah');

    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
	// insert data ke table pegawai
	DB::table('agen')->insert([
		'namaagen' => $request->namaagen,
		'jumlahagen' => $request->jumlahagen,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/agen');

    }

    public function hapus($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('agen')->where('kodeagen',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/agen');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$agen = DB::table('agen')
		->where('namaagen','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('agen.index',['agen' => $agen]);

	}

    public function edit($id)
    {
	// mengambil data pegawai berdasarkan id yang dipilih
	$agen = DB::table('agen')->where('kodeagen',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('agen.edit',['agen' => $agen]);

    }

    public function update(Request $request)
    {
	// update data pegawai
	DB::table('agen')->where('kodeagen',$request->id)->update([
		'namaagen' => $request->namaagen,
		'jumlahagen' => $request->jumlahagen,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/agen');
    }

}
