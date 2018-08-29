<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crush;
use App\Quality;

class QualitiesController extends Controller
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
    public function create($id)
    {
        $crush = Crush::find($id);
        $quality = new Quality();
        return view('crushes.addqualities',array( 'qualities'   =>  $quality,
                                                  'crush'       =>  $crush));
    }

    /**php 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        
        $crush = Crush::find($id);
        $quality = new Quality();
        $quality->personQuality = $request->crush_quality;
        $quality->crush_id = $request->route('id');
        $quality->save();

        return redirect()->route('crushes.id.show', array('id'=>$crush->id));
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
        $quality = Quality::find($id);
        $quality -> delete();

        return redirect()->back();
    }
}
