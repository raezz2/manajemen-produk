<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merek;

class MerekController extends Controller
{
	public function index(){
		$mereks = Merek::All();
		$data = array(
			'mereks' => $mereks,
			'no'        => 1
		);
		return view('merek.index',$data);
	}
	public function create(){
		$data = array('title'   => 'Merek');
		return view('merek.create',$data);
	}
	public function store(){
		Merek::create([
			'name_merek'      => request('name_merek'),
		]);
		return redirect('/merek');
	}
	public function edit(Merek $merek)
	{
		$data = array(
			'title'       => 'Merek',
			'merek'     => $merek
		);
		return view('merek.edit',$data);
	}

	public function update(Merek $merek)
	{
		$merek->update([
			'name_merek'      => request('name_merek'),
		]);
		return redirect('/merek');
	}

	public function destroy(Merek $merek){
		$merek->delete();
		return redirect()->route('merek.index');
	}
}
