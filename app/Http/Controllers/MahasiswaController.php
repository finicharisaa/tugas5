<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
//this for import model mahasiswa
use App\Mahasiswa;


class MahasiswaController extends Controller
{
    public function index()
    {
    	//memanggil data keseluruhan mahasiswa dan di simpan didalam variable $mahasiswa
		$mahasiswa = Mahasiswa::all();
		//menampilkan views index.blade.php dan melemparkan data 
		//variable $mahasiswa kedalam views
		return view("index",['mahasiswa' => $mahasiswa]);
	}

	public function tambah(){
		//menampilkan views tambah_mahasiswa.blade.php
		return view ('tambah_mahasiswa');
	}

	public function store(Request $request){

		//digunakan untuk validasi form di views
		//tambah mahasiswa
		$this->validate($request,[
			'nama' => 'required',
			'alamat' => 'required',
			'nim' => 'required|numeric',
			'no_hp' => 'required|numeric'
		]);

		//fungsi untuk create data , mengambil request dari masing" name field di views
		//tambah_mahasiswa
		Mahasiswa::create([
			'nama' => $request->nama,
			'alamat' => $request->alamat,
			'nim' => $request->nim,
			'no_hp' => $request->no_hp
		]);
		
		//ketika sukses tambah mahasiswa
		//larikan dia ke routing /mahasiswa
		return redirect('/mahasiswa');
	}

	public function edit($id){
		//mencari data dari model Mahasiswa melewati id dari data kesluruhan Mahasiswa tersebut , 
		$mahasiswa = Mahasiswa::find($id);
		//tampilkan view edit_mahasiswa.blade.php 
		//dan passing data variable yang dicari melewati by id ,
		return view('edit_mahasiswa',['mahasiswa' => $mahasiswa]);

	}

	public function update($id, Request $request) {
		//digunakan untuk validasi form di views
		//tambah mahasiswa
		$this->validate($request,[
			'nama' => 'required',
			'alamat' => 'required',
			'nim' => 'required|numeric',
			'no_hp' => 'required|numeric'
		]);

		//cari data mahasiswa lewat id 
		$mahasiswa = Mahasiswa::find($id);
		//jika ditemukan , timpa data mahasiswa yang dicari melewati id
		//dengan timpaan request dari data yang di input
		$mahasiswa->nama = $request->nama;
		$mahasiswa->alamat = $request->alamat;
		$mahasiswa->nim = $request->nim;
		$mahasiswa->no_hp = $request->no_hp;
		$mahasiswa->save();

		return redirect('/mahasiswa');

	}

	public function delete($id){
		$mahasiswa = Mahasiswa::find($id);
		$mahasiswa->delete();
		return redirect()->back();
	}
	
}