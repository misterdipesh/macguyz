<?php

namespace App\Http\Controllers;

use App\Fileinfo;
use Illuminate\Http\Request;

class FileinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fileinfos =Fileinfo::all();
        return view('result',compact('fileinfos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $place=0; 
        $problem=false;
        $problem_desc=null;
        $fileinfo=new Fileinfo;
        $fileinfo->fid = $request->fid;

        $fileinfo->fpin = $request->fpin;
        $fileinfo->place= $request->$place;
        $fileinfo->problem= $request->$problem;
        $fileinfo->problem_desc= $request->$problem_desc;

        $fileinfo->save();

        return view('mainpage');



         


    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fileinfo  $fileinfo
     * @return \Illuminate\Http\Response
     */
    public function show(Fileinfo $fileinfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fileinfo  $fileinfo
     * @return \Illuminate\Http\Response
     */
    public function edit(Fileinfo $fileinfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fileinfo  $fileinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fileinfo $fileinfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fileinfo  $fileinfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fileinfo $fileinfo)
    {
        //
    }
}
