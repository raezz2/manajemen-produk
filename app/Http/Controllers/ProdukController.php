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


    public function edit($id)
    {
        $merek = Merek::All();
        $produk = \App\Produk::findOrFail($id);

        return view('produk.edit', ['produk' => $produk, 'mereks' => $merek]);
    }


    // public function edit($id)
    // {
    //     //
    //     $merek = Merek::all();
    //     $kategori = Kategori::all();
    //     $produks = \App\Produk::findOrFail($id);
    //     $data = [
    //         'mereks' => $merek,
    //         'kategori' => $kategori,
    //         'produk' => $produks
    //     ];

    //     return view('produk.edit', $data);
    // }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $produk = \App\Produk::findOrFail($id);
        $produk->name = $request->get('name');
        $produk->save();

        return redirect()->route('produk.edit', [$id])->with('status', 'Produk successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $produk = \App\Produk::findOrFail($id);

        $produk->delete();
        return redirect()->route('produk.index')->with('status', 'Produk successfully delete');
    }
}
