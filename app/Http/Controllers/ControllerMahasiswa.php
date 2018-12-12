<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ModelMahasiswa;

class ControllerMahasiswa extends Controller
{
	public function index()
	{
	 $data = array(
	    		 'mahasiswa'=>ModelMahasiswa::all()
	    		 );
	 return view('mahasiswa', $data);
	}

	public function tambah()
	{
		return view('tambahmahasiswa');
	}

	public function save(Request $request)
	{
		if($request->isMethod('post')=="post"){
			$tambah=new ModelMahasiswa();
			$tambah->id=$request->input('id');
			$tambah->nim=$request->input('nim');
			$tambah->nama=$request->input('nama');
			$tambah->kelas=$request->input('kelas');
			$tambah->jurusan=$request->input('jurusan');
			$tambah->save();
		}
		$data = array(
			'mahasiswa'=>ModelMahasiswa::all()
			);
		return view('mahasiswa', $data);
	}

	public function ubah($id)
	{
		$data = ModelMahasiswa::where('id',$id)->get();
    	return view('ubahmahasiswa',compact('data'));
	}

	public function update(Request $request, $id)
	{
		$ubah = ModelMahasiswa::where('id',$id)->first();
		if($request->isMethod('post')){
			$ubah->nim=$request->input('nim');
			$ubah->nama=$request->input('nama');
			$ubah->kelas=$request->input('kelas');
			$ubah->jurusan=$request->input('jurusan');
			$ubah->save();
		}
		$data = array(
			'mahasiswa'=>ModelMahasiswa::all()
			);
		return view('mahasiswa', $data);
	}

	public function hapus($id)
	{
        $hapus = ModelMahasiswa::where('id',$id)->first();
		$hapus->delete();
		$data = array(
			'mahasiswa'=>ModelMahasiswa::all()
			);
		return view('mahasiswa', $data);
	}
}
