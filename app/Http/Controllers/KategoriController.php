<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
	public function index(){
		$kategoris = Kategori::All();
		$data = array(
			'kategoris' => $kategoris,
			'no'        => 1
		);
		return view('kategori.index',$data);
	}
	public function create(){
		$data = array('title'   => 'Kategori');
		return view('kategori.create',$data);
	}
	public function store(){
		Kategori::create([
			'name'      => request('name'),
		]);
		return redirect('/kategori');
	}
	public function edit(Kategori $kategori)
	{
		$data = array(
			'title'       => 'Kategori',
			'kategori'     => $kategori
		);
		return view('kategori.edit',$data);
	}

	public function update(Kategori $kategori)
	{
		$kategori->update([
			'name'      => request('name'),
		]);
		return redirect('/kategori');
	}

	public function destroy(Kategori $kategori){
		$kategori->delete();
		return redirect()->route('kategori.index');
	}
}
