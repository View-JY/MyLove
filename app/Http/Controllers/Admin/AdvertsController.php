<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Advert;

class AdvertsController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() 
	{
		$adverts = Advert::get();
		return view('admin.adverts.index',['adverts'=> $adverts]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create(Request $request) 
	{
		//echo '11';

		return view('admin.adverts.create');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) 
	{
		//$data = $request -> all();
		$adverts = new Advert;
		$adverts -> name = $request -> input('name');
		$adverts -> url = $request -> input('url');
		$adverts -> image = $request -> input('image');
		$adverts -> synopsis = $request -> input('synopsis');
		$adverts -> weight = $request -> input('weight');
		$res = $adverts -> save();
		 if($res){
            return back() -> with('success','添加成功');
        }else{
            return back() -> with('error','添加失败了');
        }
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) 
	{
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) 
	{
		$advert = new Advert;
		$adverts = $advert -> where('id',$id) -> get();
		//dd($data);
		return view('admin.adverts.edit',['title'=>'修改用户','adverts' => $adverts]);
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) 
	{
		$adverts = Advert::find($id);
		$adverts -> name = $request -> input('name');
		$adverts -> url = $request -> input('url');
		$adverts -> image = $request -> input('image');
		$adverts -> synopsis = $request -> input('synopsis');
		$adverts -> weight = $request -> input('weight');
		$res = $adverts -> save();
		if($res){
            return redirect('/admin/adverts') -> with('success','修改成功');
        }else{
            return back() -> with('error','修改失败,再来一次');
        }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) 
	{
		//dump($id);
		$adverts = Advert::find($id);
		$res = $adverts -> delete();
		if($res){
			return redirect('/admin/adverts') -> with('success','删除成功');
		}else{
			return redirect('/admin/adverts') -> with('error','删除失败');
		}
	}
}
