<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collecte;   
use Auth;

class CollectesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Collecte $collecte)
    {
        $this ->validate($request, [
            'name' => 'required|min:2|unique:collectes,name',
        ], [
            'name.required' => '文集名称不能为空',
            'name.min' => '文集名称不能太短',
            'name.unique' => '文集名称重复'
        ]);

        $data = [
            'name' => $request ->input('name'),
            'user_id' => Auth::id(),
        ];

        Collecte::create($data);

        return back() ->with('文集创建成功，快去写文章吧');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function articleCreate($id)
    {
        $collecte = Collecte::find($id);
        return view('collectes.create', [
            'collecte' => $collecte,
        ]);
    }

    public function articleStore(Request $request)
    {
        $request['user_id'] = Auth::id();


    }
}
