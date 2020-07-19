<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Kategori;
use App\Merek;
use DB;

class ProdukController extends Controller
{
	public function index(){
		$produks = Produk::All();

		$produks = DB::table('produks')
		->join('mereks', 'mereks.id', '=', 'produks.merek_id')
		->join('kategoris', 'kategoris.id', '=', 'produks.kategori_id')
        ->get();
		$data = array(
			'title' => 'index',
			'no'    => 1,
			'produks'  => $produks,
		);
		return view('produk.index',$data);
	}

	public function create()
	{
		$kategoris  = Kategori::All();
		$mereks   = Merek::All();
		$data = array(
			'title'     => request('title'),
			'price'	    => request('price'),
			'kategoris' => $kategoris,
			'mereks'  => $mereks,
		);
		return view('produk.create',$data);
	}
	public function store()
	{
		Produk::create([
			'title'     	=> request('title'),
			'price'	    	=> request('price'),
			'merek_id' 	=> request('merek_id'),
			'kategori_id'  	=> request('kategori_id')
		]);
		return redirect('/produk');
    }

    // public function edit(Produk $produk)
	// {
	// 	$data = array([
	// 		'title'       => 'Produk',
    //         'produk'     => $produk,
    //         'kategoris' => $kategoris,
	// 		'mereks'  => $mereks,
    //     ]);
	// 	return view('produk.edit',$data);
    // }

    public function edit(Produk $produk)
    {
        $data= json_decode( json_encode($data), true);
        $produk = Produk::find($id);
        return view('produk_edit', ['produk' => $produk]);
    }

	public function update(Produk $produk)
	{
		$produk->update([
            'title'      => request('title'),
            'price'	    	=> request('price'),
			'merek_id' 	=> request('merek_id'),
			'kategori_id'  	=> request('kategori_id'),
		]);
		return redirect('/produk');
	}

	public function destroy(Produk $produk){
		$produk->delete();
		return redirect()->route('produk.index');
	}
}
