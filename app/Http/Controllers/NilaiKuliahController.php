<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    //
    public function index()
    {
    	$nilaikuliah = DB::table('nilaikuliah')->paginate(5);
    	return view('nilaikuliah.index',['nilaikuliah' => $nilaikuliah]);
    }

    public function tambah()
    {

	// memanggil view tambah
	return view('nilaikuliah.tambah');

    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
	// insert data ke table pegawai
	DB::table('nilaikuliah')->insert([
		'NRP' => $request->nrp,
		'NilaiAngka' => $request->nilaiangka,
		'SKS' => $request->sks,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/nilaikuliah');

    }
}
